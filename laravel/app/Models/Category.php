<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<CategoryFactory> */
    use HasFactory;

    protected $fillable = ['slug'];

    public $incrementing = false;

    public $timestamps = false;

    public $primaryKey = 'slug';

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function mainImage(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'main_image_id');
    }
}
