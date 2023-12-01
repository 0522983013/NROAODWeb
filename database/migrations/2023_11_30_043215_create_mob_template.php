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
        Schema::create('mob_template', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('TYPE');
            $table->text("NAME");
            $table->integer('hp');
            $table->smallInteger('range_move');
            $table->smallInteger('speed');
            $table->smallInteger('dart_type');
            $table->smallInteger('percent_dame');
            $table->smallInteger('percent_tiem_nang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mob_template');
    }
};
