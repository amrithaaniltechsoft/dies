<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_about', function (Blueprint $table) {
            $table->id();
            $table->string('badge_label')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_title_accent')->nullable();
            $table->string('overview_label')->nullable();
            $table->text('overview_text')->nullable();
            $table->string('overview_footer')->nullable();
            $table->string('overview_image')->nullable();
            $table->json('cards')->nullable();
            $table->timestamps();
        });

        DB::table('home_about')->insert([
            'badge_label' => 'About Master Form Dies',
            'section_title' => 'High-Precision Engineering &',
            'section_title_accent' => 'Custom Tooling Solutions',
            'overview_label' => 'SPECIALIZATION OVERVIEW',
            'overview_text' => 'At Master Form Dies Manufacturing Company Pvt Ltd, we specialize in delivering high-precision engineering solutions, high-grade die manufacturing, and custom tooling designed to meet the rigorous demands of modern manufacturing. Situated in Ernakulam, Kerala, our facility combines technical expertise, advanced fabrication practices, and quality craftsmanship to supply reliable components for industrial applications.',
            'overview_footer' => 'Mannathoor, Ernakulam, Kerala • Industrial Tooling & Die Manufacturing',
            'overview_image' => null,
            'cards' => json_encode([
                [
                    'icon' => 'shield',
                    'title' => 'Strict Quality Control',
                    'desc' => 'Total dimensional quality assurance and rigorous testing standards.',
                    'footer' => 'QUALITY ASSURANCE PROTOCOL',
                ],
                [
                    'icon' => 'target',
                    'title' => 'Robust Component Design',
                    'desc' => 'Durable tooling engineered for high accuracy and long operational endurance.',
                    'footer' => 'HIGH ACCURACY & ENDURANCE',
                ],
                [
                    'icon' => null,
                    'title' => 'CONCEPT TO PRODUCTION',
                    'desc' => 'From initial concept and tool design to final production and quality assurance, we partner with clients across various sectors to provide durable, cost-effective, and dimensionally accurate manufacturing solutions.',
                    'footer' => 'FULL LIFECYCLE TOOLING PARTNER',
                ],
                [
                    'icon' => 'factory',
                    'title' => 'Ernakulam Facility',
                    'desc' => 'Mannathoor North P.O., Near Government Ayurveda Hospital, Kerala, India.',
                    'footer' => null,
                ],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('home_about');
    }
};