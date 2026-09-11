<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WhyChooseUsResource;
use App\Models\WhyChooseUs;

class WhyChooseUsController extends Controller
{
    public function show()
    {
        $whyChooseUs = WhyChooseUs::first();

        if (! $whyChooseUs) {
            return response()->json(['message' => 'Why choose us not found.'], 404);
        }

        return new WhyChooseUsResource($whyChooseUs);
    }
}