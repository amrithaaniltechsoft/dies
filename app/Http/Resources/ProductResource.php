<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'image' => $this->image_url,
            'images' => collect($this->images ?? [])->map(fn (string $image) => str_starts_with($image, '/') ? $image : asset('storage/'.$image))->values(),
            'tag' => $this->tag,
            'title' => $this->name,
            'desc' => $this->description,
            'fullDesc' => $this->full_desc,
            'features' => $this->features ?? [],
            'benefits' => $this->benefits->pluck('benefit')->values()->all(),
            'faqs' => $this->faqs ?? [],
            'price' => $this->price,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
        ];
    }
}