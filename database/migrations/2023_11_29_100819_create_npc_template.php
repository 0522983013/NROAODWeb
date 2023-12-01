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
        Schema::create('npc_template', function (Blueprint $table) {
            $table->integer('id');
            $table->text('NAME');
            $table->integer('head');
            $table->integer('body');
            $table->integer('leg');
            $table->integer('avatar')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('npc_template');
    }
};
