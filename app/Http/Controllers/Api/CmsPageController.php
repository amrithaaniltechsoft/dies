<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CmsPageResource;
use App\Models\CmsPage;

class CmsPageController extends Controller
{
    public function show(string $page)
    {
        $cmsPage = CmsPage::where('page', $page)
            ->where('is_published', true)
            ->first();

        if (! $cmsPage) {
            return response()->json(['message' => 'Page not found.'], 404);
        }

        return new CmsPageResource($cmsPage);
    }
}