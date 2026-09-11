<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterAbout extends Model
{
    protected $table = 'footer_about';

    protected $fillable = [
        'description',
    ];
}