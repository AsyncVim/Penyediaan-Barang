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
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->string('KodeKlr');
            $table->dateTime('TanggalKlr');
            $table->string('KodeCust');
            $table->string('NomorBon')->unique();
            $table->integer('TotalMnt');
            $table->integer('TotalKrm');

            $table->foreign('KodeKlr')->references('KodeKlr')->on('keluar_barang');
            $table->foreign('KodeCust')->references('KodeCust')->on('pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluarans');
    }
};
