<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_settings', function (Blueprint $table) {
            $table->id();
            $table->string('badge_title')->nullable();
            $table->string('badge_location')->nullable();
            $table->string('headline_1')->nullable();
            $table->string('headline_accent')->nullable();
            $table->string('headline_2')->nullable();
            $table->text('description')->nullable();
            $table->string('button_label')->nullable();
            $table->string('quality_title')->nullable();
            $table->string('quality_subtitle')->nullable();
            $table->timestamps();
        });

        DB::table('hero_settings')->insert([
            'badge_title' => 'Master Form Dies Manufacturing Company Pvt Ltd',
            'badge_location' => 'Ernakulam, Kerala',
            'headline_1' => 'HIGH-PRECISION',
            'headline_accent' => 'DIE MANUFACTURING',
            'headline_2' => '& CUSTOM TOOLING.',
            'description' => 'Master Form Dies Manufacturing Company Pvt Ltd is a precision engineering enterprise located in Mannathoor, Ernakulam, Kerala — dedicated to high-standard tool design, die making, and custom manufacturing.',
            'button_label' => 'Contact Technical Team',
            'quality_title' => 'Strict Quality Control',
            'quality_subtitle' => '100% CMM Accuracy Audit',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_settings');
    }
};