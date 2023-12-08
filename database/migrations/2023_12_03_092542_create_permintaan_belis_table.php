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
        Schema::create('permintaan_beli', function (Blueprint $table) {
            $table->unsignedBigInteger('NomorPermintaan')->unique()->autoIncrement();
            $table->dateTime('TanggalMnt');
            $table->integer('TotalMnt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permintaan_belis');
    }
};
