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
        Schema::create('radar', function (Blueprint $table) {
            $table->id();
            $table->integer('iconId')->default(0);
            $table->Tinyinteger('rank')->default(0);
            $table->integer('max')->default(60);
            $table->integer('type')->default(0);
            $table->integer('template')->default(1);
            $table->string('body')->default('[]');
            $table->string('name');
            $table->string('info');
            $table->string('options')->default('[]');
            $table->integer('require')->default(-1);
            $table->integer('require_level')->default(0);
            $table->integer('aura_id')->default(-1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radar');
    }
};
