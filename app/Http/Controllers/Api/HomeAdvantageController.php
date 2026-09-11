<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeAdvantageResource;
use App\Models\HomeAdvantage;

class HomeAdvantageController extends Controller
{
    public function show()
    {
        $advantages = HomeAdvantage::first();

        if (! $advantages) {
            return response()->json(['message' => 'Home advantages not found.'], 404);
        }

        return new HomeAdvantageResource($advantages);
    }
}