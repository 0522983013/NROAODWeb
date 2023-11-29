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
        Schema::create('side_task_template', function (Blueprint $table) {
            $table->integer('id');
            $table->string('NAME');
            $table->string('max_count_lv1');
            $table->string('max_count_lv2');
            $table->string('max_count_lv3');
            $table->string('max_count_lv4');
            $table->string('max_count_lv5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('side_task_template');
    }
};
