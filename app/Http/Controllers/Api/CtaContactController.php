<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CtaContactResource;
use App\Models\CtaContact;

class CtaContactController extends Controller
{
    public function show()
    {
        $contact = CtaContact::first();

        if (! $contact) {
            return response()->json(['message' => 'CTA contact section not found.'], 404);
        }

        return new CtaContactResource($contact);
    }
}