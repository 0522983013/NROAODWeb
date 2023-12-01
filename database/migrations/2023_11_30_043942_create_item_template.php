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
        Schema::create('item_template', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('TYPE');
            $table->integer('gender');
            $table->text('NAME');
            $table->text('description');
            $table->integer('icon_id');
            $table->integer('part');
            $table->integer('is_up_to_up');
            $table->integer('power_require');
            $table->integer('gold')->default(0);
            $table->integer('gem')->default(0);
            $table->integer('head')->default(-1);
            $table->integer('body')->default(-1);
            $table->integer('leg')->default(-1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_template');
    }
};
