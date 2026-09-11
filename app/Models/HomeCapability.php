<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCapability extends Model
{
    protected $fillable = [
        'badge_label',
        'section_title',
        'section_title_accent',
        'cards',
    ];

    protected function casts(): array
    {
        return [
            'cards' => 'array',
        ];
    }
}