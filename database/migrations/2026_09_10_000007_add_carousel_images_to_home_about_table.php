<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('home_about', function (Blueprint $table) {
            $table->json('carousel_images')->nullable()->after('cards');
        });

        DB::table('home_about')->update([
            'carousel_images' => json_encode([
                ['image' => '/machines/m1.jpg', 'alt' => 'Master Form Dies Machinery 1'],
                ['image' => '/machines/m2.jpg', 'alt' => 'Master Form Dies Machinery 2'],
                ['image' => '/machines/m3.jpg', 'alt' => 'Master Form Dies Machinery 3'],
                ['image' => '/machines/m4.jpg', 'alt' => 'Master Form Dies Machinery 4'],
                ['image' => '/machines/m5.jpg', 'alt' => 'Master Form Dies Machinery 5'],
                ['image' => '/machines/m6.jpg', 'alt' => 'Master Form Dies Machinery 6'],
            ]),
        ]);
    }

    public function down(): void
    {
        Schema::table('home_about', function (Blueprint $table) {
            $table->dropColumn('carousel_images');
        });
    }
};