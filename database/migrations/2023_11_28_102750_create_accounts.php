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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->smallInteger('ban')->default(0);
            $table->integer('web_point_post')->default(0);
            $table->integer('web_last_post')->default(0);
            $table->integer('role')->default(-1);
            $table->integer('is_admin')->default(-1);
            $table->timestamp('last_time_login')->useCurrent();
            $table->timestamp('last_time_logout')->useCurrent();
            $table->string('ip_address')->nullable();
            $table->integer('active')->default(0);
            $table->integer('thoi_vang')->default(0);
            $table->integer('server_login')->default(-1);
            $table->double('bd_player')->nullable();
            $table->tinyInteger('is_gift_box')->nullable();
            $table->string('gift_time')->nullable();
            $table->longText('reward')->default(-1);
            $table->integer('vnd')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
