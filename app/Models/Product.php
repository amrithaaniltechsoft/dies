<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'image',
        'images',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected static function booted(): void
    {
        static::creating(function (self $product): void {
            $product->slug ??= Str::slug($product->name);
        });

        static::updating(function (self $product): void {
            if ($product->isDirty('name') && blank($product->slug)) {
                $product->slug = Str::slug($product->name);
            }

            if ($product->isDirty('name') && filled($product->slug) && $product->slug === Str::slug($product->getOriginal('name'))) {
                $product->slug = Str::slug($product->name);
            }
        });
    }

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'images' => 'array',
        ];
    }
}
