<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductReview;
use App\Models\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample users if they don't exist
        $users = User::all();
        if ($users->isEmpty()) {
            $users = User::factory(5)->create();
        }

        $products = [
            [
                'name' => 'Vitamin C Brightening Serum',
                'category' => 'Serums',
                'featured_image' => '/images/products/vitamin-c-serum-main.jpg',
                'short_description' => 'Powerful antioxidant serum for radiant, even-toned skin.',
                'long_description' => 'Our premium Vitamin C serum is formulated with 20% L-Ascorbic Acid to brighten skin, reduce dark spots, and protect against environmental damage. The lightweight formula absorbs quickly and works to even skin tone while boosting collagen production for firmer, more youthful-looking skin.',
                'price' => 45.99,
                'stock' => 35,
                'sizes' => ['30ml', '60ml'],
                'colors' => [
                    ['name' => 'Clear', 'hex' => '#f8f9fa'],
                ],
                'features' => ['20% Vitamin C', 'Hyaluronic Acid', 'Vitamin E', 'Fragrance-free', 'Dermatologist tested'],
                'care_instructions' => 'Apply 2-3 drops to clean skin in the morning. Follow with moisturizer and SPF. Store in cool, dry place.',
                'specifications' => [
                    'Volume' => '30ml / 60ml',
                    'Key Ingredient' => '20% L-Ascorbic Acid',
                    'Skin Type' => 'All skin types',
                    'Time of Use' => 'Morning',
                    'pH Level' => '3.5-4.0',
                ],
                'slug' => 'vitamin-c-brightening-serum',
                'images' => [
                    '/images/products/vitamin-c-serum-1.jpg',
                    '/images/products/vitamin-c-serum-2.jpg',
                    '/images/products/vitamin-c-serum-3.jpg',
                    '/images/products/vitamin-c-serum-4.jpg',
                ],
            ],
            [
                'name' => 'Gentle Foaming Cleanser',
                'category' => 'Cleansers',
                'featured_image' => '/images/products/foaming-cleanser-main.jpg',
                'short_description' => 'Mild, sulfate-free cleanser for daily use.',
                'long_description' => 'This gentle foaming cleanser effectively removes makeup, dirt, and impurities without stripping the skin of its natural oils. Formulated with ceramides and niacinamide, it maintains the skin barrier while providing a deep cleanse. Perfect for sensitive and all skin types.',
                'price' => 24.99,
                'stock' => 60,
                'sizes' => ['150ml', '300ml'],
                'colors' => [
                    ['name' => 'White', 'hex' => '#ffffff'],
                ],
                'features' => ['Sulfate-free', 'Ceramides', 'Niacinamide', 'pH balanced', 'Non-comedogenic'],
                'care_instructions' => 'Use morning and evening. Apply to damp skin, massage gently, rinse thoroughly with lukewarm water.',
                'specifications' => [
                    'Volume' => '150ml / 300ml',
                    'Key Ingredients' => 'Ceramides, Niacinamide',
                    'Skin Type' => 'All skin types, especially sensitive',
                    'Time of Use' => 'Morning & Evening',
                    'pH Level' => '5.5',
                ],
                'slug' => 'gentle-foaming-cleanser',
                'images' => [
                    '/images/products/foaming-cleanser-1.jpg',
                    '/images/products/foaming-cleanser-2.jpg',
                    '/images/products/foaming-cleanser-3.jpg',
                ],
            ],
            [
                'name' => 'Hydrating Night Moisturizer',
                'category' => 'Moisturizers',
                'featured_image' => '/images/products/night-moisturizer-main.jpg',
                'short_description' => 'Rich, nourishing moisturizer for overnight skin repair.',
                'long_description' => 'This luxurious night moisturizer works while you sleep to repair, hydrate, and rejuvenate your skin. Enriched with retinol, peptides, and botanical oils, it helps reduce fine lines, improve skin texture, and restore radiance. Wake up to smoother, more youthful-looking skin.',
                'price' => 65.99,
                'stock' => 40,
                'sizes' => ['50ml'],
                'colors' => [
                    ['name' => 'Cream', 'hex' => '#fff8dc'],
                ],
                'features' => ['Retinol', 'Peptides', 'Jojoba Oil', 'Shea Butter', 'Anti-aging formula'],
                'care_instructions' => 'Apply to clean skin before bedtime. Use 2-3 times per week initially, then increase as tolerated.',
                'specifications' => [
                    'Volume' => '50ml',
                    'Key Ingredients' => 'Retinol, Peptides, Botanical Oils',
                    'Skin Type' => 'Mature, dry skin',
                    'Time of Use' => 'Evening only',
                    'Texture' => 'Rich cream',
                ],
                'slug' => 'hydrating-night-moisturizer',
                'images' => [
                    '/images/products/night-moisturizer-1.jpg',
                    '/images/products/night-moisturizer-2.jpg',
                    '/images/products/night-moisturizer-3.jpg',
                    '/images/products/night-moisturizer-4.jpg',
                ],
            ],
            [
                'name' => 'Exfoliating AHA/BHA Toner',
                'category' => 'Toners',
                'featured_image' => '/images/products/aha-bha-toner-main.jpg',
                'short_description' => 'Dual-action exfoliating toner for smoother, clearer skin.',
                'long_description' => 'This powerful yet gentle toner combines glycolic acid (AHA) and salicylic acid (BHA) to exfoliate dead skin cells, unclog pores, and improve skin texture. Regular use reveals brighter, smoother skin with reduced appearance of pores and blemishes.',
                'price' => 32.99,
                'stock' => 45,
                'sizes' => ['120ml', '240ml'],
                'colors' => [
                    ['name' => 'Clear', 'hex' => '#f8f9fa'],
                ],
                'features' => ['Glycolic Acid', 'Salicylic Acid', 'Witch Hazel', 'Alcohol-free', 'Pore refining'],
                'care_instructions' => 'Use 2-3 times per week in the evening. Apply with cotton pad, avoid eye area. Always use SPF during the day.',
                'specifications' => [
                    'Volume' => '120ml / 240ml',
                    'Key Ingredients' => 'Glycolic Acid 7%, Salicylic Acid 2%',
                    'Skin Type' => 'Oily, combination, acne-prone',
                    'Time of Use' => 'Evening',
                    'pH Level' => '3.8-4.2',
                ],
                'slug' => 'exfoliating-aha-bha-toner',
                'images' => [
                    '/images/products/aha-bha-toner-1.jpg',
                    '/images/products/aha-bha-toner-2.jpg',
                    '/images/products/aha-bha-toner-3.jpg',
                ],
            ],
            [
                'name' => 'SPF 50 Mineral Sunscreen',
                'category' => 'Sunscreens',
                'featured_image' => '/images/products/mineral-sunscreen-main.jpg',
                'short_description' => 'Broad-spectrum mineral sunscreen for daily protection.',
                'long_description' => 'This lightweight, non-greasy mineral sunscreen provides broad-spectrum SPF 50 protection using zinc oxide and titanium dioxide. The formula is reef-safe, fragrance-free, and suitable for sensitive skin. It applies smoothly without leaving a white cast and works perfectly under makeup.',
                'price' => 28.99,
                'stock' => 55,
                'sizes' => ['50ml', '100ml'],
                'colors' => [
                    ['name' => 'White', 'hex' => '#ffffff'],
                ],
                'features' => ['SPF 50', 'Zinc Oxide', 'Titanium Dioxide', 'Reef-safe', 'Water-resistant 80 minutes'],
                'care_instructions' => 'Apply liberally 15 minutes before sun exposure. Reapply every 2 hours or after swimming/sweating.',
                'specifications' => [
                    'Volume' => '50ml / 100ml',
                    'SPF Level' => '50',
                    'Active Ingredients' => 'Zinc Oxide 18%, Titanium Dioxide 7%',
                    'Skin Type' => 'All skin types, especially sensitive',
                    'Water Resistance' => '80 minutes',
                ],
                'slug' => 'spf-50-mineral-sunscreen',
                'images' => [
                    '/images/products/mineral-sunscreen-1.jpg',
                    '/images/products/mineral-sunscreen-2.jpg',
                    '/images/products/mineral-sunscreen-3.jpg',
                    '/images/products/mineral-sunscreen-4.jpg',
                ],
            ],
            [
                'name' => 'Hyaluronic Acid Hydrating Mask',
                'category' => 'Masks',
                'featured_image' => '/images/products/hydrating-mask-main.jpg',
                'short_description' => 'Intensive hydrating sheet mask for plump, dewy skin.',
                'long_description' => 'These luxurious sheet masks are infused with multiple types of hyaluronic acid to provide intense hydration and plumping effects. Each mask delivers a concentrated dose of moisture, leaving skin soft, supple, and glowing. Perfect for weekly pampering or special occasions.',
                'price' => 3.99,
                'stock' => 100,
                'sizes' => ['Single mask', '5-pack', '10-pack'],
                'colors' => [
                    ['name' => 'Clear', 'hex' => '#f8f9fa'],
                ],
                'features' => ['Multi-molecular Hyaluronic Acid', 'Vitamin B5', 'Allantoin', 'Biodegradable sheet', 'Cruelty-free'],
                'care_instructions' => 'Apply to clean skin for 15-20 minutes. Remove and gently pat remaining essence into skin. Use 1-2 times per week.',
                'specifications' => [
                    'Pack Size' => 'Single / 5-pack / 10-pack',
                    'Key Ingredients' => 'Hyaluronic Acid, Vitamin B5',
                    'Skin Type' => 'All skin types, especially dry',
                    'Usage Time' => '15-20 minutes',
                    'Material' => 'Bio-cellulose',
                ],
                'slug' => 'hyaluronic-acid-hydrating-mask',
                'images' => [
                    '/images/products/hydrating-mask-1.jpg',
                    '/images/products/hydrating-mask-2.jpg',
                    '/images/products/hydrating-mask-3.jpg',
                ],
            ]
        ];

        foreach ($products as $productData) {
            $images = $productData['images'];
            unset($productData['images']);

            $product = Product::create($productData);

            // Create product images
            foreach ($images as $index => $imagePath) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $imagePath,
                    'thumbnail_path' => $imagePath,
                    'alt_text' => $product->name . ' - Image ' . ($index + 1),
                    'sort_order' => $index,
                    'is_featured' => $index === 0,
                ]);
            }

            // Create sample reviews specific to skincare
            $skincareReviews = [
                [
                    'rating' => 5,
                    'comment' => 'Amazing results! My skin has never looked better. The texture is so smooth and absorbs beautifully.',
                    'helpful_count' => 18,
                    'likes' => 12,
                ],
                [
                    'rating' => 4,
                    'comment' => 'Great product! I noticed improvement in my skin after just one week of use. Will definitely repurchase.',
                    'helpful_count' => 14,
                    'likes' => 9,
                ],
                [
                    'rating' => 5,
                    'comment' => 'Perfect for my sensitive skin. No irritation and gives me that healthy glow I\'ve been looking for.',
                    'helpful_count' => 22,
                    'likes' => 15,
                ],
                [
                    'rating' => 3,
                    'comment' => 'Good product but took longer to see results than expected. Packaging could be better too.',
                    'helpful_count' => 5,
                    'likes' => 3,
                ],
                [
                    'rating' => 5,
                    'comment' => 'Holy grail product! My dark spots have faded significantly and my skin feels so hydrated.',
                    'helpful_count' => 28,
                    'likes' => 20,
                ],
                [
                    'rating' => 4,
                    'comment' => 'Love the lightweight formula. Doesn\'t clog my pores and works well under makeup.',
                    'helpful_count' => 11,
                    'likes' => 7,
                ],
            ];

            // Randomly select 3-5 reviews for each product
            $reviewCount = min(rand(3, 5), $users->count()); // Don't exceed available users
            $selectedReviews = collect($skincareReviews)->random($reviewCount);
            $availableUsers = $users->shuffle(); // Shuffle users to get random selection

            foreach ($selectedReviews as $index => $review) {
                ProductReview::create([
                    'product_id' => $product->id,
                    'user_id' => $availableUsers[$index]->id, // Use different user for each review
                    'rating' => $review['rating'],
                    'comment' => $review['comment'],
                    'helpful_count' => $review['helpful_count'],
                    'likes' => $review['likes'],
                ]);
            }

            // Update product with calculated rating
            $reviews = $product->reviews;
            $averageRating = $reviews->avg('rating') ?? 0;
            $reviewCount = $reviews->count();

            $product->update([
                'average_rating' => round($averageRating, 2),
                'review_count' => $reviewCount,
            ]);
        }
    }
}