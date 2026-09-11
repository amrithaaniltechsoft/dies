<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_core_expertise', function (Blueprint $table) {
            $table->id();
            $table->string('badge_label')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_title_accent')->nullable();
            $table->text('subtitle')->nullable();
            $table->json('cards')->nullable();
            $table->timestamps();
        });

        DB::table('about_core_expertise')->insert([
            'badge_label' => 'Engineering Capabilities',
            'section_title' => 'Core',
            'section_title_accent' => 'Expertise & Services',
            'subtitle' => 'Specialized engineering disciplines tailored for robust industrial production.',
            'cards' => json_encode([
                [
                    'icon' => 'hammer',
                    'tag' => 'CAPABILITY 01',
                    'title' => 'Precision Die Manufacturing',
                    'desc' => 'Engineering custom dies built for durability, exact tolerances, and high-volume production efficiency.',
                    'footer' => 'ENGINEERING SPEC',
                ],
                [
                    'icon' => 'target',
                    'tag' => 'CAPABILITY 02',
                    'title' => 'Tooling & Mold Design',
                    'desc' => 'Developing specialized tools and molds tailored to complex component geometries and specific industry requirements.',
                    'footer' => 'ENGINEERING SPEC',
                ],
                [
                    'icon' => 'wrench',
                    'tag' => 'CAPABILITY 03',
                    'title' => 'Custom Metal Working & Machining',
                    'desc' => 'Precision machining and metal component fabrication delivered with strict quality controls.',
                    'footer' => 'ENGINEERING SPEC',
                ],
                [
                    'icon' => 'factory',
                    'tag' => 'CAPABILITY 04',
                    'title' => 'Component Prototyping',
                    'desc' => 'Rapid translation of technical drawings into functional prototypes for testing and validation.',
                    'footer' => 'ENGINEERING SPEC',
                ],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('about_core_expertise');
    }
};