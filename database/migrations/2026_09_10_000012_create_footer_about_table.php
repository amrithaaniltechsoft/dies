<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footer_about', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('footer_about')->insert([
            'description' => 'Specializing in delivering high-precision engineering solutions, high-grade die manufacturing, and custom tooling designed to meet the rigorous demands of modern manufacturing.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('footer_about');
    }
};