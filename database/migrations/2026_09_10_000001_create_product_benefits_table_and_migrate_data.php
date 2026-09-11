<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->text('benefit');
            $table->unsignedInteger('sort')->default(0);
            $table->timestamps();
        });

        foreach (DB::table('products')->select(['id', 'benefits'])->get() as $product) {
            $benefits = json_decode((string) $product->benefits, true) ?? [];

            foreach (array_values($benefits) as $index => $benefit) {
                if (! is_string($benefit)) {
                    continue;
                }

                DB::table('product_benefits')->insert([
                    'product_id' => $product->id,
                    'benefit' => $benefit,
                    'sort' => $index,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('benefits');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->json('benefits')->nullable()->after('features');
        });

        foreach (DB::table('products')->select(['id'])->get() as $product) {
            $benefits = DB::table('product_benefits')
                ->where('product_id', $product->id)
                ->orderBy('sort')
                ->pluck('benefit')
                ->values()
                ->all();

            if (! count($benefits)) {
                continue;
            }

            DB::table('products')
                ->where('id', $product->id)
                ->update(['benefits' => json_encode($benefits)]);
        }

        Schema::dropIfExists('product_benefits');
    }
};