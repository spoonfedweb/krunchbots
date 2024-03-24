<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->constrained('lookups')->onDelete('set null');
            $table->foreignId('category_id')->nullable()->constrained('lookups')->onDelete('set null');
            $table->string('size');
            $table->string('color');
            $table->text('description');
            $table->integer('sku')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
