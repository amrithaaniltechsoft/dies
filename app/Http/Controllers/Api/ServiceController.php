<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Service::query()
            ->orderBy('created_at', 'desc');

        if ($request->filled('search')) {
            $search = $request->string('search')->trim();
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('tag', 'like', "%{$search}%");
            });
        }

        return ServiceResource::collection($query->get());
    }

    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->first();

        if (! $service) {
            return response()->json(['message' => 'Service not found.'], 404);
        }

        return new ServiceResource($service);
    }
}