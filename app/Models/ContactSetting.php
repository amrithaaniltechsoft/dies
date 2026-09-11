<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $fillable = [
        'company_name',
        'contact1',
        'contact2',
        'whatsapp',
        'email',
        'address',
        'hours',
    ];
}
