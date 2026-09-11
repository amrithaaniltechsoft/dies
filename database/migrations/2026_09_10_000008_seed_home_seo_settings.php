<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('seo_settings')->updateOrInsert(
            ['page' => 'home'],
            [
                'meta_title' => 'Master Form Dies Manufacturing Company Pvt Ltd | High-Precision Die & Tooling',
                'meta_description' => 'Delivering uncompromised quality, exact tolerances, and robust custom dies and tooling for modern industrial sectors from Ernakulam to the world.',
                'meta_keywords' => 'Die Manufacturing,Custom Tooling,Precision Machining,CNC Milling,Mold Design,Ernakulam Engineering',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }

    public function down(): void
    {
        DB::table('seo_settings')->where('page', 'home')->delete();
    }
};