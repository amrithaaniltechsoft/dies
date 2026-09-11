<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeoSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'page' => $this->page,
            'title' => $this->meta_title,
            'description' => $this->meta_description,
            'keywords' => $this->meta_keywords,
        ];
    }
}