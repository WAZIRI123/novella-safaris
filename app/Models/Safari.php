<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Safari extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'overview', 'image', 'features',
        'price_from', 'badge', 'duration_days', 'duration_nights',
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
        'price_from' => 'decimal:2',
        'is_published' => 'boolean',
    ];
}
