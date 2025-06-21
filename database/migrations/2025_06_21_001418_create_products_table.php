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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('featured_image');
            $table->text('short_description');
            $table->longText('long_description');
            $table->decimal('price', 10, 2);
            $table->integer('stock')->default(0);
            $table->json('sizes')->nullable(); // Store available sizes as JSON
            $table->json('colors')->nullable(); // Store available colors as JSON
            $table->decimal('average_rating', 3, 2)->default(0.00);
            $table->integer('review_count')->default(0);
            $table->json('features')->nullable(); // Store features as JSON array
            $table->text('care_instructions')->nullable();
            $table->json('specifications')->nullable(); // Store specifications as JSON
            $table->boolean('is_active')->default(true);
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
