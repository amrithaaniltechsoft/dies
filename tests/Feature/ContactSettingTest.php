<?php

use App\Models\ContactSetting;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('stores contact information', function () {
    $setting = ContactSetting::create([
        'contact1' => '+966 11 111 1111',
        'contact2' => '+966 22 222 2222',
        'whatsapp' => '+966 55 555 5555',
        'email' => 'hello@example.com',
        'address' => 'Riyadh, Saudi Arabia',
    ]);

    expect($setting->contact1)->toBe('+966 11 111 1111')
        ->and($setting->contact2)->toBe('+966 22 222 2222')
        ->and($setting->whatsapp)->toBe('+966 55 555 5555')
        ->and($setting->email)->toBe('hello@example.com')
        ->and($setting->address)->toBe('Riyadh, Saudi Arabia');
});
