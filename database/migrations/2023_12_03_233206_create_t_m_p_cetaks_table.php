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
        Schema::create('TMPcetak', function (Blueprint $table) {
            $table->integer('NomorPermintaan');
            $table->string('KodeBrg');
            $table->integer('Stok');
            $table->integer('Jumlah');
            $table->integer('Dikirim');
            $table->text('Keterangan');

            $table->foreign('KodeBrg')->references('KodeBrg')->on('detail_penerimaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_m_p_cetaks');
    }
};
