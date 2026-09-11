<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('tag')->nullable()->after('image');
            $table->text('full_desc')->nullable()->after('description');
            $table->json('features')->nullable()->after('full_desc');
            $table->json('benefits')->nullable()->after('features');
            $table->json('faqs')->nullable()->after('benefits');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['tag', 'full_desc', 'features', 'benefits', 'faqs']);
        });
    }
};