<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('price');
            $table->string('description');
            $table->string('sku');
            $table->string('category_id');
            $table->string('sub_category_id');
            $table->string('quantity');
            $table->string('stock'); // This represents the available inventory
            $table->string('image');
            $table->string('is_featured')->default(0);
            $table->string('is_new')->default(0);
            $table->string('is_best_seller')->default(0);
            $table->string('is_top_rated')->default(0);
            $table->string('status')->default(1); // This represents product visibility/availability status (1=active, 0=inactive)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('products');
    }
};
