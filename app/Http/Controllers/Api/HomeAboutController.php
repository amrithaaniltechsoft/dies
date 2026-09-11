<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeAboutResource;
use App\Models\HomeAbout;

class HomeAboutController extends Controller
{
    public function show()
    {
        $about = HomeAbout::first();

        if (! $about) {
            return response()->json(['message' => 'About section not found.'], 404);
        }

        return new HomeAboutResource($about);
    }
}