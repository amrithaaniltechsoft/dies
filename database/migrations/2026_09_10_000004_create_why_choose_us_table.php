<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('why_choose_us', function (Blueprint $table) {
            $table->id();
            $table->string('badge_label')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_title_accent')->nullable();
            $table->text('subtitle')->nullable();
            $table->json('cards')->nullable();
            $table->timestamps();
        });

        DB::table('why_choose_us')->insert([
            'badge_label' => 'Why Choose Us',
            'section_title' => 'Why Choose',
            'section_title_accent' => 'Master Form Dies?',
            'subtitle' => 'Built on a legacy of precision craftsmanship, cutting-edge technology, and unyielding quality assurance.',
            'cards' => json_encode([
                [
                    'icon' => 'quality',
                    'tag' => 'Quality Protocol',
                    'title' => 'Uncompromised Quality & Engineering Precision',
                    'desc' => 'We adhere to rigorous quality standards, maintaining tight tolerances and utilizing high-grade tool steel to ensure optimal component performance.',
                ],
                [
                    'icon' => 'tech',
                    'tag' => 'Infrastructure',
                    'title' => 'Advanced Manufacturing Technology',
                    'desc' => 'Equipped with state-of-the-art multi-axis CNC milling machines, wire-cut EDM, and high-precision inspection tools for intricate fabrications.',
                ],
                [
                    'icon' => 'award',
                    'tag' => 'Expert Tooling',
                    'title' => 'Technical Proficiency & Experienced Team',
                    'desc' => 'Our skilled team of engineers and toolmakers bring years of industry expertise to every project, offering tailored tooling solutions.',
                ],
                [
                    'icon' => 'map',
                    'tag' => 'Strategic Logistics',
                    'title' => 'Strategic Location & Reliable Delivery',
                    'desc' => 'Based in Mannathoor, Ernakulam, Kerala, our facility is strategically positioned for efficient distribution and prompt customer support.',
                ],
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('why_choose_us');
    }
};