<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CtaContact extends Model
{
    protected $table = 'cta_contact';

    protected $fillable = [
        'badge_label',
        'section_title',
        'section_title_accent',
        'subtitle',
        'company_name',
        'address',
        'email',
        'phone_1',
        'phone_2',
    ];
}