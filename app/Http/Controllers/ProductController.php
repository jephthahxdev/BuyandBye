<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\ReviewReply;
use App\Models\ReviewLike;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show($id)
    {
        $product = Product::with(['images', 'reviews.user'])
            ->where('slug', $id)
            ->orWhere('id', $id)
            ->where('is_active', true)
            ->first();

        if (!$product) {
            abort(404);
        }

        // Format product data for the template
        $formattedProduct = [
            'id' => $product->id,
            'name' => $product->name,
            'category' => $product->category,
            'featured_image' => $product->featured_image,
            'short_description' => $product->short_description,
            'images' => $product->images->map(function ($image) {
                return ['thumb' => $image->image_path];
            })->toArray(),
            'price' => number_format($product->price, 2),
            'stock' => $product->stock,
            'rating_full' => floor($product->average_rating),
            'rating_half' => $product->average_rating - floor($product->average_rating) >= 0.5 ? 1 : 0,
            'review_count' => $product->review_count,
            'average_rating' => number_format($product->average_rating, 1),
            'sizes' => collect($product->sizes)->map(function ($size) {
                return ['name' => $size, 'selected' => false];
            })->toArray(),
            'colors' => collect($product->colors)->map(function ($color) {
                return [
                    'name' => $color['name'],
                    'hex' => $color['hex'],
                    'selected' => false
                ];
            })->toArray(),
            'description' => $product->long_description,
            'features' => $product->features,
            'care_instructions' => $product->care_instructions,
            'specifications' => $product->specifications,
            'rating_breakdown' => $product->rating_breakdown,
            'reviews' => $product->reviews->map(function ($review) {
                return [
                    'id' => $review->id,
                    'author' => $review->user->name,
                    'rating' => $review->rating,
                    'date' => $review->created_at->format('Y-m-d'),
                    'comment' => $review->comment,
                    'likes' => $review->likes,
                    'helpful_count' => $review->helpful_count,
                    'replies' => $review->replies->map(function ($reply) {
                        return [
                            'author' => $reply->user->name,
                            'date' => $reply->created_at->format('Y-m-d'),
                            'comment' => $reply->comment,
                        ];
                    })->toArray(),
                ];
            })->toArray(),
            'review_pagination' => [
                'current_page' => 1,
                'pages' => [
                    ['number' => 1, 'current' => true],
                ],
            ],
        ];

        $data = [
            'product' => $formattedProduct,
            'csrf_token' => csrf_token(),
            'is_logged_in' => Auth::check(),
            'user' => Auth::user(),
        ];

        $content = $this->smarty->render('product-details.tpl', $data);
        return response($content);
    }

    public function submitReview(Request $request): JsonResponse
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|min:10|max:1000',
            'product_id' => 'required',
        ]);

        $product = Product::where('slug', $request->input('product_id'))
            ->orWhere('id', $request->input('product_id'))
            ->first();

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found'], 404);
        }

        // Check if user already reviewed this product
        $existingReview = ProductReview::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($existingReview) {
            return response()->json(['success' => false, 'message' => 'You have already reviewed this product'], 400);
        }

        // Create the review
        $review = ProductReview::create([
            'product_id' => $product->id,
            'user_id' => Auth::id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        // Update product rating statistics
        $this->updateProductRatingStats($product);

        return response()->json([
            'success' => true,
            'message' => 'Review submitted successfully',
            'review' => [
                'id' => $review->id,
                'author' => Auth::user()->name,
                'rating' => $review->rating,
                'date' => $review->created_at->format('Y-m-d'),
                'comment' => $review->comment,
            ]
        ]);
    }

    public function likeReview(Request $request): JsonResponse
    {
        $request->validate([
            'review_id' => 'required|integer|exists:product_reviews,id',
        ]);

        $review = ProductReview::find($request->review_id);
        
        if (!$review) {
            return response()->json(['success' => false, 'message' => 'Review not found'], 404);
        }

        // Check if user already liked this review
        $existingLike = ReviewLike::where('user_id', Auth::id())
            ->where('review_id', $review->id)
            ->first();

        if ($existingLike) {
            // Unlike
            $existingLike->delete();
            $review->decrement('likes');
            $liked = false;
        } else {
            // Like
            ReviewLike::create([
                'user_id' => Auth::id(),
                'review_id' => $review->id,
            ]);
            $review->increment('likes');
            $liked = true;
        }

        return response()->json([
            'success' => true,
            'liked' => $liked,
            'likes_count' => $review->fresh()->likes,
        ]);
    }

    public function replyReview(Request $request): JsonResponse
    {
        $request->validate([
            'review_id' => 'required|integer|exists:product_reviews,id',
            'reply' => 'required|string|min:5|max:500',
        ]);

        $review = ProductReview::find($request->review_id);
        
        if (!$review) {
            return response()->json(['success' => false, 'message' => 'Review not found'], 404);
        }

        // Create the reply
        $reply = ReviewReply::create([
            'review_id' => $review->id,
            'user_id' => Auth::id(),
            'comment' => $request->reply,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Reply submitted successfully',
            'reply' => [
                'author' => Auth::user()->name,
                'date' => $reply->created_at->format('Y-m-d'),
                'comment' => $reply->comment,
            ]
        ]);
    }

    private function updateProductRatingStats(Product $product): void
    {
        $reviews = $product->reviews;
        
        if ($reviews->count() > 0) {
            $averageRating = $reviews->avg('rating');
            $reviewCount = $reviews->count();
            
            // Calculate rating breakdown
            $ratingBreakdown = [];
            for ($i = 1; $i <= 5; $i++) {
                $count = $reviews->where('rating', $i)->count();
                $percentage = $reviewCount > 0 ? ($count / $reviewCount) * 100 : 0;
                
                $ratingBreakdown[] = [
                    'stars' => $i,
                    'count' => $count,
                    'percentage' => round($percentage, 1)
                ];
            }
            
            $product->update([
                'average_rating' => $averageRating,
                'review_count' => $reviewCount,
                'rating_breakdown' => $ratingBreakdown,
            ]);
        }
    }
}
