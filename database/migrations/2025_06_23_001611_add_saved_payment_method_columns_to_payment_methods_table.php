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
        Schema::table('payment_methods', function (Blueprint $table) {
            // Add columns for saved payment methods
            $table->boolean('is_default')->default(false)->after('gateway_response');
            $table->string('exp_month')->nullable()->after('last4');
            $table->string('exp_year')->nullable()->after('exp_month');
            $table->string('bin')->nullable()->after('exp_year');
            $table->string('bank')->nullable()->after('bin');
            
            // Make order_id nullable for saved payment methods (not tied to specific orders)
            $table->foreignId('order_id')->nullable()->change();
            
            // Add index for default payment methods
            $table->index(['user_id', 'is_default']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payment_methods', function (Blueprint $table) {
            $table->dropIndex(['user_id', 'is_default']);
            $table->dropColumn(['is_default', 'exp_month', 'exp_year', 'bin', 'bank']);
            $table->foreignId('order_id')->nullable(false)->change();
        });
    }
};
