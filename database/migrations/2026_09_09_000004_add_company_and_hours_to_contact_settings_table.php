<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_settings', function (Blueprint $table) {
            $table->string('company_name')->nullable()->after('id');
            $table->string('hours')->nullable()->after('address');
        });
    }

    public function down(): void
    {
        Schema::table('contact_settings', function (Blueprint $table) {
            $table->dropColumn(['company_name', 'hours']);
        });
    }
};