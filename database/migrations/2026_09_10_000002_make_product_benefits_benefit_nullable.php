<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('ALTER TABLE `product_benefits` MODIFY `benefit` TEXT NULL');

        DB::table('product_benefits')
            ->where(fn ($query) => $query->whereNull('benefit')->orWhereRaw('TRIM(benefit) = ?', ['']))
            ->delete();
    }

    public function down(): void
    {
        DB::table('product_benefits')->whereNull('benefit')->delete();

        DB::statement('ALTER TABLE `product_benefits` MODIFY `benefit` TEXT NOT NULL');
    }
};