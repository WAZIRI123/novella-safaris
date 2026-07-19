<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DayTrip extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'overview', 'image', 'price',
        'duration', 'features', 'duration_days', 'duration_nights',
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
