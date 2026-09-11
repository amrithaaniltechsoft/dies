<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoreExpertiseResource;
use App\Models\AboutCoreExpertise;

class CoreExpertiseController extends Controller
{
    public function show()
    {
        $expertise = AboutCoreExpertise::first();

        if (! $expertise) {
            return response()->json(['message' => 'Core expertise section not found.'], 404);
        }

        return new CoreExpertiseResource($expertise);
    }
}