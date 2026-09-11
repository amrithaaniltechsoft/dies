<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeAboutResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'badgeLabel' => $this->badge_label,
            'sectionTitle' => $this->section_title,
            'sectionTitleAccent' => $this->section_title_accent,
            'overviewLabel' => $this->overview_label,
            'overviewText' => $this->overview_text,
            'overviewFooter' => $this->overview_footer,
            'overviewImage' => $this->overview_image ? (str_starts_with($this->overview_image, '/') ? $this->overview_image : asset('storage/'.$this->overview_image)) : null,
            'cards' => $this->cards ?? [],
            'carouselImages' => collect($this->carousel_images ?? [])
                ->map(fn (array $item): array => [
                    'image' => ! empty($item['image']) ? (str_starts_with($item['image'], '/') ? $item['image'] : asset('storage/'.$item['image'])) : null,
                    'alt' => $item['alt'] ?? null,
                ])
                ->values()
                ->all(),
        ];
    }
}