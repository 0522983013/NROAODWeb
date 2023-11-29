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
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id');
            $table->string('name');
            $table->integer('head');
            $table->tinyInteger('have_tennis_space_ship')->default(0);
            $table->integer('clan_id')->default(-1);
            $table->string('data_inventory');
            $table->string('data_location');
            $table->string('data_point');
            $table->string('data_magic_tree');
            $table->string('items_body');
            $table->string('items_bag');
            $table->string('items_box');
            $table->string('items_box_lucky_round');
            $table->string('friends');
            $table->string('enemies');
            $table->string('data_intrinsic');
            $table->string('data_item_time');
            $table->string('data_item_time_sieucap');
            $table->string('data_task');
            $table->string('data_mabu_egg');
            $table->string('data_dua');
            $table->string('data_charm');
            $table->string('skills');
            $table->string('skills_shortcut');
            $table->string('pet');
            $table->string('data_black_ball');
            $table->string('data_side_task');
            $table->bigInteger('violate');
            $table->integer('pointPvp')->default(0);
            $table->longText('info_phoban');
            $table->longText('info_achievement');
            $table->string('Thu_TrieuHoi')->nullable()->default('[-1]');
            $table->string('nhiemvu_chienthan');
            $table->integer('NguHanhSonPoint')->nullable()->default(0);
            $table->string('data_card')->default('[]');
            $table->string('dhieu')->default('[1,1]');
            $table->string('dhtime')->default('[0,0]');
            $table->string('dhtime2')->default('[0,0]');
            $table->string('dhtime3')->default('[0,0]');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
