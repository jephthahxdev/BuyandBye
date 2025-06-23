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
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->after('email');
            $table->string('twitter_handle')->nullable()->after('avatar');
            $table->string('facebook_handle')->nullable()->after('twitter_handle');
            $table->string('linkedin_handle')->nullable()->after('facebook_handle');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'avatar',
                'twitter_handle',
                'facebook_handle',
                'linkedin_handle'
            ]);
        });
    }
};
