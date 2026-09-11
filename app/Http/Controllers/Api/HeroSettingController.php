<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HeroSettingResource;
use App\Models\HeroSetting;

class HeroSettingController extends Controller
{
    public function show()
    {
        $settings = HeroSetting::first();

        if (! $settings) {
            return response()->json(['message' => 'Hero settings not found.'], 404);
        }

        return new HeroSettingResource($settings);
    }
}