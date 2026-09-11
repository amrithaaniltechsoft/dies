<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cta_contact', function (Blueprint $table) {
            $table->id();
            $table->string('badge_label')->nullable();
            $table->string('section_title')->nullable();
            $table->string('section_title_accent')->nullable();
            $table->text('subtitle')->nullable();
            $table->string('company_name')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->timestamps();
        });

        DB::table('cta_contact')->insert([
            'badge_label' => 'Contact Information',
            'section_title' => 'Inquiries &',
            'section_title_accent' => 'Design Consultations',
            'subtitle' => 'Contact our technical team for custom project quotes, design consultations, or site visits.',
            'company_name' => 'MASTER FORM DIES MANUFACTURING COMPANY PVT LTD',
            'address' => '2/284, MANNATHOOR P.O., NEAR GOVERNMENT AYURVEDA HOSPITAL, ERNAKULAM-686667, KERALA, INDIA',
            'email' => 'info@masterformdies.com',
            'phone_1' => '+917025839776',
            'phone_2' => '+966536897613',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('cta_contact');
    }
};