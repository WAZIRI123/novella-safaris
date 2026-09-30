<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrekkingRoute extends Model
{
    /**
     * Route overview pages (linked from the menu) that list a route's
     * day options; they are not bookable packages themselves.
     */
    public const OVERVIEW_SLUGS = ['machame', 'lemosho', 'marangu', 'rongai', 'umbwe', 'northern-circuit', 'meru'];

    public function scopePackages($query)
    {
        return $query->whereNotIn('slug', self::OVERVIEW_SLUGS);
    }

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
