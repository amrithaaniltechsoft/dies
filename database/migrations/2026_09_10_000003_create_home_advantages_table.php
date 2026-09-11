<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_advantages', function (Blueprint $table) {
            $table->id();
            $table->string('badge_label')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_title_accent')->nullable();
            $table->string('footer_label')->nullable();
            $table->json('cards')->nullable();
            $table->timestamps();
        });

        DB::table('home_advantages')->insert([
            'badge_label' => 'Industrial Advantages',
            'section_title' => 'Built for High-Stakes',
            'section_title_accent' => 'Manufacturing Demands',
            'footer_label' => 'PRECISION SPECIFIED',
            'cards' => json_encode([
                [
                    'icon' => 'quality',
                    'tag' => 'INFRASTRUCTURE 01',
                    'title' => 'Uncompromised Quality Assurance',
                    'desc' => 'Every die and component undergoes thorough quality checks to ensure dimensional accuracy and long operational life.',
                ],
                [
                    'icon' => 'cpu',
                    'tag' => 'INFRASTRUCTURE 02',
                    'title' => 'Technical Proficiency',
                    'desc' => 'Skilled engineering practices aligned with standard industrial specs and modern precision techniques.',
                ],
                [
                    'icon' => 'shield',
                    'tag' => 'INFRASTRUCTURE 03',
                    'title' => 'Client-Centric Approach',
                    'desc' => 'Flexible production runs, competitive lead times, and tailored solutions to fit specific manufacturing workflows.',
                ],
                [
                    'icon' => 'map',
                    'tag' => 'INFRASTRUCTURE 04',
                    'title' => 'Strategic Location',
                    'desc' => 'Conveniently accessible facility near Ernakulam to support local and regional industrial requirements efficiently.',
                ],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('home_advantages');
    }
};