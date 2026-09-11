<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;
use App\Models\ContactSetting;

class ContactSettingController extends Controller
{
    public function show()
    {
        $settings = ContactSetting::first();

        if (! $settings) {
            return response()->json(['message' => 'Contact settings not found.'], 404);
        }

        return new ContactResource($settings);
    }
}