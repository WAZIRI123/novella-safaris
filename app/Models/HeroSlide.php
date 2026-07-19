<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    protected $fillable = [
        'image', 'headline', 'sort_order', 'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
