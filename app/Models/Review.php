<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name', 'location', 'rating', 'quote', 'avatar',
        'sort_order', 'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];
}
