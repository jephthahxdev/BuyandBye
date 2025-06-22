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
        Schema::dropIfExists('payment_methods');
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('transaction_reference')->unique();
            $table->string('gateway_reference')->nullable();
            $table->decimal('amount', 10, 2);
            $table->string('currency', 3)->default('USD');
            $table->enum('status', ['pending', 'success', 'failed', 'cancelled'])->default('pending');
            $table->string('gateway');
            $table->string('card_type')->nullable();
            $table->string('last4')->nullable();
            $table->string('authorization_code')->nullable();
            $table->json('gateway_response')->nullable();
            $table->timestamps();
            
            $table->index(['order_id', 'status']);
            $table->index('transaction_reference');
            $table->index('gateway_reference');
            $table->index(['user_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};