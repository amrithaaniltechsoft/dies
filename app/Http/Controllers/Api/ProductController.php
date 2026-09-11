<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query()
            ->orderBy('created_at', 'desc');

        if ($request->filled('search')) {
            $search = $request->string('search')->trim();
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('tag', 'like', "%{$search}%");
            });
        }

        return ProductResource::collection($query->get());
    }

    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (! $product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        return new ProductResource($product);
    }
}