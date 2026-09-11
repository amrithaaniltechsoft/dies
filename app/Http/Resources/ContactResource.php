<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'companyName' => $this->company_name,
            'contact1' => $this->contact1,
            'contact2' => $this->contact2,
            'whatsapp' => $this->whatsapp,
            'email' => $this->email,
            'address' => $this->address,
            'hours' => $this->hours,
        ];
    }
}