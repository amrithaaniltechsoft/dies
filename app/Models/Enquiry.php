<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'full_name',
        'contact_info',
        'company_name',
        'service_type',
        'quantity',
        'message',
    ];
}