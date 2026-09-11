<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    protected $table = 'home_about';

    protected $fillable = [
        'badge_label',
        'section_title',
        'section_title_accent',
        'overview_label',
        'overview_text',
        'overview_footer',
        'overview_image',
        'cards',
        'carousel_images',
    ];

    protected function casts(): array
    {
        return [
            'cards' => 'array',
            'carousel_images' => 'array',
        ];
    }
}