<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeAdvantageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'badgeLabel' => $this->badge_label,
            'sectionTitle' => $this->section_title,
            'sectionTitleAccent' => $this->section_title_accent,
            'footerLabel' => $this->footer_label,
            'cards' => $this->cards ?? [],
        ];
    }
}