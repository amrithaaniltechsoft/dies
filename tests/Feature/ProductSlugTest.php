<?php

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('generates a slug automatically from the product name', function () {
    $product = Product::create([
        'name' => 'My Test Product',
        'price' => 99.99,
        'description' => 'Demo description',
        'image' => 'products/demo.jpg',
    ]);

    expect($product->slug)->toBe('my-test-product');
});
