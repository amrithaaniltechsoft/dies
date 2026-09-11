<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HeroSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'badgeTitle' => $this->badge_title,
            'badgeLocation' => $this->badge_location,
            'headline1' => $this->headline_1,
            'headlineAccent' => $this->headline_accent,
            'headline2' => $this->headline_2,
            'description' => $this->description,
            'buttonLabel' => $this->button_label,
            'qualityTitle' => $this->quality_title,
            'qualitySubtitle' => $this->quality_subtitle,
        ];
    }
}