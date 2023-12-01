<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item_shop', function (Blueprint $table) {
            $table->id();
            $table->integer('tab_id');
            $table->integer('temp_id');
            $table->Tinyinteger('is_new');
            $table->Tinyinteger('is_sell');
            $table->integer('type_sell');
            $table->integer('cost');
            $table->integer('icon_spec');
            $table->integer('item_spec');
            $table->timestamp('create_time')->useCurrent();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('item_shop');
    }
};
