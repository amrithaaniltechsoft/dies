<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_capabilities', function (Blueprint $table) {
            $table->id();
            $table->string('badge_label')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_title_accent')->nullable();
            $table->json('cards')->nullable();
            $table->timestamps();
        });

        DB::table('home_capabilities')->insert([
            'badge_label' => 'Core Expertise',
            'section_title' => 'Our Engineering',
            'section_title_accent' => '& Manufacturing Capabilities',
            'cards' => json_encode([
                [
                    'icon' => 'tools',
                    'tag' => 'CORE CAPABILITY 01',
                    'title' => 'Precision Die Manufacturing',
                    'desc' => 'Custom high-standard dies designed and built to withstand intense press operations and repetitive production cycles.',
                    'bullets' => ['High-Grade Die Steels', 'Tolerances within ±0.005mm', 'Custom Stamping & Form Dies'],
                ],
                [
                    'icon' => 'layers',
                    'tag' => 'CORE CAPABILITY 02',
                    'title' => 'Tooling & Mold Design',
                    'desc' => 'Advanced tool paths, mold assemblies, and fixture designs developed for maximum efficiency and material longevity.',
                    'bullets' => ['3D Tool CAD Modeling', 'Multi-Stage Progressive Dies', 'Fixture & Gauge Assemblies'],
                ],
                [
                    'icon' => 'tech',
                    'tag' => 'CORE CAPABILITY 03',
                    'title' => 'Component Fabrication',
                    'desc' => 'Comprehensive CNC machining, wire EDM, and grinding services tailored for industrial components.',
                    'bullets' => ['Precision Wire EDM', 'High-Speed CNC Milling', 'Surface & Profile Grinding'],
                ],
                [
                    'icon' => 'quality',
                    'tag' => 'CORE CAPABILITY 04',
                    'title' => 'Engineering & Quality Audit',
                    'desc' => 'Thorough dimensional verification, CMM inspection, and engineering consultation for reliable production runs.',
                    'bullets' => ['100% CMM Inspection', 'First-Article Inspection', 'Quality Audit Certification'],
                ],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('home_capabilities');
    }
};