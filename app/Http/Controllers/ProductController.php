<?php

namespace App\Http\Controllers;

use App\Services\SmartyRenderer;

class ProductController extends Controller
{
    protected $smarty;

    public function __construct(SmartyRenderer $smarty)
    {
        $this->smarty = $smarty;
    }

    public function show($id)
    {
        // Example product data (replace with real DB query as needed)
        $product = [
            'name' => 'Women\'s Classic Jacket',
            'main_image' => '/images/products/jacket-main.jpg',
            'images' => [
                ['thumb' => '/images/products/jacket-1.jpg'],
                ['thumb' => '/images/products/jacket-2.jpg'],
                ['thumb' => '/images/products/jacket-3.jpg'],
                ['thumb' => '/images/products/jacket-4.jpg'],
            ],
            'price' => '129.99',
            'rating_full' => 4,
            'rating_half' => 1,
            'review_count' => 23,
            'average_rating' => 4.5,
            'sizes' => [
                ['name' => 'S', 'selected' => false],
                ['name' => 'M', 'selected' => true],
                ['name' => 'L', 'selected' => false],
            ],
            'colors' => [
                ['name' => 'Black', 'hex' => '#222', 'selected' => true],
                ['name' => 'Beige', 'hex' => '#e5e5d7', 'selected' => false],
            ],
            'description' => 'A timeless classic jacket for all seasons.',
            'features' => ['100% cotton', 'Machine washable', 'Slim fit'],
            'care_instructions' => 'Wash at 30°C. Do not bleach. Iron on low.',
            'specifications' => [
                'Material' => 'Cotton',
                'Fit' => 'Slim',
                'Length' => 'Hip',
            ],
            'rating_breakdown' => [
                ['stars' => 5, 'percentage' => 60, 'count' => 14],
                ['stars' => 4, 'percentage' => 30, 'count' => 7],
                ['stars' => 3, 'percentage' => 5, 'count' => 1],
                ['stars' => 2, 'percentage' => 3, 'count' => 0],
                ['stars' => 1, 'percentage' => 2, 'count' => 1],
            ],
            'reviews' => [
                [
                    'author' => 'Alice',
                    'rating' => 5,
                    'date' => '2024-06-01',
                    'comment' => 'Love this jacket!',
                    'likes' => 2,
                    'helpful_count' => 1,
                    'replies' => [],
                ],
                // ... more reviews
            ],
            'review_pagination' => [
                'current_page' => 1,
                'pages' => [
                    ['number' => 1, 'current' => true],
                    ['number' => 2, 'current' => false],
                ],
            ],
        ];

        $data = [
            'product' => $product,
            'csrf_token' => csrf_token(),
        ];

        $content = $this->smarty->render('product-details.tpl', $data);
        return response($content);
    }
}
