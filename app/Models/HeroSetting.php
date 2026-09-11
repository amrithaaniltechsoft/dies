<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSetting extends Model
{
    protected $fillable = [
        'badge_title',
        'badge_location',
        'headline_1',
        'headline_accent',
        'headline_2',
        'description',
        'button_label',
        'quality_title',
        'quality_subtitle',
    ];
}