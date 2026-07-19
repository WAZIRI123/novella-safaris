<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialPackage extends Model
{
    protected $fillable = [
        'name', 'slug', 'image', 'description', 'price_from',
        'duration', 'sort_order', 'is_published',
    ];

    protected $casts = [
        'price_from' => 'decimal:2',
        'is_published' => 'boolean',
    ];
}
