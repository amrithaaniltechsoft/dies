<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SeoSettingResource;
use App\Models\SeoSetting;

class SeoSettingController extends Controller
{
    public function show(string $page)
    {
        $seo = SeoSetting::where('page', $page)->first();

        if (! $seo) {
            return response()->json(['message' => 'SEO settings not found.'], 404);
        }

        return new SeoSettingResource($seo);
    }
}