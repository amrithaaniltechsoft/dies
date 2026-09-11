<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CtaContactResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'badgeLabel' => $this->badge_label,
            'sectionTitle' => $this->section_title,
            'sectionTitleAccent' => $this->section_title_accent,
            'subtitle' => $this->subtitle,
            'companyName' => $this->company_name,
            'address' => $this->address,
            'email' => $this->email,
            'phone1' => $this->phone_1,
            'phone2' => $this->phone_2,
        ];
    }
}