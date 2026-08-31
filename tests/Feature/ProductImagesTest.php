<?php

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('stores multiple product images as a json array', function () {
    $product = Product::create([
        'name' => 'Desk Lamp',
        'price' => 149.99,
        'description' => 'Modern desk lamp',
        'image' => 'products/desk-lamp.jpg',
        'images' => [
            'products/desk-lamp-1.jpg',
            'products/desk-lamp-2.jpg',
        ],
    ]);

    expect($product->images)->toBe([
        'products/desk-lamp-1.jpg',
        'products/desk-lamp-2.jpg',
    ]);
});
