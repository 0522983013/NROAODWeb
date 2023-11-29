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
        Schema::create('task_sub_template', function (Blueprint $table) {
            $table->integer('task_main_id');
            $table->text('NAME');
            $table->integer('max_count');
            $table->text('notify');
            $table->integer('npc_id');
            $table->integer('map');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_sub_template');
    }
};
