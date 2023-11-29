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
        Schema::create('skill_template', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('nclass_id');
            $table->integer('max_point')->default(7);
            $table->smallInteger('mana_use_type');
            $table->smallInteger('TYPE');
            $table->integer('icon_id');
            $table->string('dam_info');
            $table->integer('slot');
            $table->text('skills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_template');
    }
};
