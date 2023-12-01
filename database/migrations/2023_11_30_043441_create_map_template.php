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
        Schema::create('map_template', function (Blueprint $table) {
            $table->integer('id');
            $table->text('NAME');
            $table->integer('zones')->default(1);
            $table->integer('max_player')->default(15);
            $table->string('data', 1000)->default('[]');
            $table->integer('type')->default(1);
            $table->integer('planet_id')->default(1);
            $table->integer('bg_type')->default(1);
            $table->integer('tile_id')->default(1);
            $table->integer('bg_id')->default(1);
            $table->text('waypoints');
            $table->text('mobs');
            $table->text('npcs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('map_template');
    }
};
