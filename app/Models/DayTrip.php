<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DayTrip extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'image', 'price',
        'duration', 'features', 'sort_order', 'is_published',
    ];

    protected $casts = [
        'features' => 'array',
        'price' => 'decimal:2',
        'is_published' => 'boolean',
    ];
}
