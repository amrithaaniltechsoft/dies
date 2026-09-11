<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAdvantage extends Model
{
    protected $fillable = [
        'badge_label',
        'section_title',
        'section_title_accent',
        'footer_label',
        'cards',
    ];

    protected function casts(): array
    {
        return [
            'cards' => 'array',
        ];
    }
}