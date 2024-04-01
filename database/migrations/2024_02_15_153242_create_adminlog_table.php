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
        Schema::create('adminlog', function (Blueprint $table) {
            $table->id('log_id');
            $table->unsignedBigInteger('admin_id');
            $table->string('action');
            $table->unsignedBigInteger('target_user_id');
            $table->unsignedBigInteger('target_ad_id');
            $table->dateTime('action_datetime');
            // Другие дополнительные данные
            $table->timestamps();
            
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('target_user_id')->references('id')->on('users');
            $table->foreign('target_ad_id')->references('ad_id')->on('advertisements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adminlog');
    }
};
