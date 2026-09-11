<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeCapabilityResource;
use App\Models\HomeCapability;

class HomeCapabilityController extends Controller
{
    public function show()
    {
        $capabilities = HomeCapability::first();

        if (! $capabilities) {
            return response()->json(['message' => 'Capabilities not found.'], 404);
        }

        return new HomeCapabilityResource($capabilities);
    }
}