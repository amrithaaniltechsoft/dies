<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'tag',
        'full_desc',
        'features',
        'faqs',
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
            'features' => 'array',
            'faqs' => 'array',
        ];
    }

    public function benefits(): HasMany
    {
        return $this->hasMany(ProductBenefit::class)->orderBy('sort');
    }

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? (str_starts_with($this->image, '/') ? $this->image : asset('storage/'.$this->image)) : null;
    }
}