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
        Schema::create('web_cmt', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id');
            $table->integer('cmt_id')->nullable();
            $table->integer('post_id')->nullable();
            $table->text('noidung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_cmt');
    }
};
