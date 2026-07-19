<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrekkingRoute extends Model
{
    protected $fillable = [
        'name', 'slug', 'days', 'price', 'description', 'overview', 'image',
        'difficulty', 'features', 'duration_days', 'duration_nights',
        'pricing_tiers', 'itinerary', 'includes', 'excludes',
        'accommodations', 'gallery', 'category', 'theme', 'skill_level',
        'sort_order', 'is_published',
    ];

    protected $casts = [
        'features' => 'array',
        'pricing_tiers' => 'array',
        'itinerary' => 'array',
        'includes' => 'array',
        'excludes' => 'array',
        'accommodations' => 'array',
        'gallery' => 'array',
        'price' => 'decimal:2',
        'is_published' => 'boolean',
    ];
}
