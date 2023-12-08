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
        Schema::create('detail_permintaan_beli', function (Blueprint $table) {
            $table->unsignedBigInteger('NomorPermintaan')->unique()->autoIncrement();
            $table->string('KodeBrg');
            $table->integer('JumlahBrg');

            $table->foreign('KodeBrg')->references('KodeBrg')->on('detail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_permintaan_belis');
    }
};
