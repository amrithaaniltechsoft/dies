<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'image' => $this->image_url,
            'tag' => $this->tag,
            'title' => $this->name,
            'desc' => $this->description,
            'fullDesc' => $this->full_desc,
            'features' => $this->features ?? [],
            'benefits' => $this->benefits ?? [],
            'faqs' => $this->faqs ?? [],
        ];
    }
}