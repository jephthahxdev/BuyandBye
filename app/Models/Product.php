<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'featured_image',
        'short_description',
        'long_description',
        'price',
        'stock',
        'sizes',
        'colors',
        'average_rating',
        'review_count',
        'features',
        'care_instructions',
        'specifications',
        'is_active',
        'slug',
    ];

    protected $casts = [
        'sizes' => 'array',
        'colors' => 'array',
        'features' => 'array',
        'specifications' => 'array',
        'price' => 'decimal:2',
        'average_rating' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class)->where('is_approved', true);
    }

    public function featuredImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_featured', true);
    }

    public function getRatingBreakdownAttribute()
    {
        $reviews = $this->reviews;
        $total = $reviews->count();
        
        if ($total === 0) {
            return [];
        }

        $breakdown = [];
        for ($i = 1; $i <= 5; $i++) {
            $count = $reviews->where('rating', $i)->count();
            $percentage = $total > 0 ? round(($count / $total) * 100) : 0;
            
            $breakdown[] = [
                'stars' => $i,
                'percentage' => $percentage,
                'count' => $count,
            ];
        }

        return array_reverse($breakdown); // 5 stars first
    }
}
