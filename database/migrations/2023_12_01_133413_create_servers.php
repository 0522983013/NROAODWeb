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
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->text('IP')->default('Chờ Cập Nhập'); //IP Server
            $table->text('NAME')->default('Máy Chủ AOD'); //IP Server
            $table->integer('status')->default(0); //0 Bảo Trì, 1 Online
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servers');
    }
};
