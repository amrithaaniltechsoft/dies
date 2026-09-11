<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FooterAboutResource;
use App\Models\FooterAbout;

class FooterAboutController extends Controller
{
    public function show()
    {
        $about = FooterAbout::first();

        if (! $about) {
            return response()->json(['message' => 'Footer about not found.'], 404);
        }

        return new FooterAboutResource($about);
    }
}