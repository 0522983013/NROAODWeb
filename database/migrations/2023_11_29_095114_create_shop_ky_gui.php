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
        Schema::create('shop_ky_gui', function (Blueprint $table) {
            $table->id();
            $table->integer('player_id');
            $table->integer('tab');
            $table->integer('item_id');
            $table->integer('gold');
            $table->integer('gem');
            $table->integer('quantity');
            $table->text('itemOption')->default('[]');
            $table->integer('isUpTop');
            $table->integer('isBuy');
            $table->Biginteger('Thoi_gian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_ky_gui');
    }
};
