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
        Schema::create('small_version', function (Blueprint $table) {
            $table->id();
            $table->integer('x1');
            $table->integer('x2');
            $table->integer('x3');
            $table->integer('x4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('small_version');
    }
};
