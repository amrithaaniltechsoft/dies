<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'tag',
        'full_desc',
        'features',
        'benefits',
        'faqs',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected static function booted(): void
    {
        static::creating(function (self $service): void {
            $service->slug ??= Str::slug($service->name);
        });
    }

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'features' => 'array',
            'benefits' => 'array',
            'faqs' => 'array',
        ];
    }

    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? (str_starts_with($this->image, '/') ? $this->image : asset('storage/'.$this->image)) : null;
    }
}