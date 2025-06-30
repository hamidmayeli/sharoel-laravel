<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'price',
        'discounted_price',
        'is_discounted',
        'discount_text_en',
        'discount_text_fa',
        'discount_text_de',
    ];

    public $timestamps = false;

    protected $casts = [
        'is_discounted' => 'boolean',
    ];
}
