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
        Schema::create('web_settings', function (Blueprint $table) {
            $table->id();
            $table->text('NAME')->default('Coder By KilLove');
            $table->text('title')->default('Coder By KilLove');
            $table->text('facebook_url')->default('https://facebook.com/tsangvps');
            $table->text('facebook_fanpage')->default('https://facebook.com/tsangvps');
            $table->text('zalo_url')->default('https://facebook.com/tsangvps');
            $table->text('Introduce')->default('Coder By KilLove');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_settings');
    }
};
