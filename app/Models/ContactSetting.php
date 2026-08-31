<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $fillable = [
        'contact1',
        'contact2',
        'whatsapp',
        'email',
        'address',
    ];
}
