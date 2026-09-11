<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CoreExpertiseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'badgeLabel' => $this->badge_label,
            'sectionTitle' => $this->section_title,
            'sectionTitleAccent' => $this->section_title_accent,
            'subtitle' => $this->subtitle,
            'cards' => $this->cards ?? [],
        ];
    }
}