<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialPackage extends Model
{
    protected $fillable = [
        'name', 'slug', 'image', 'description', 'overview', 'price_from',
        'duration', 'duration_days', 'duration_nights',
        'pricing_tiers', 'itinerary', 'includes', 'excludes',
        'accommodations', 'gallery', 'category', 'theme', 'skill_level',
        'sort_order', 'is_published',
    ];

    protected $casts = [
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
