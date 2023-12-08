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
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->string('KodeTrm');
            $table->dateTime('TanggalTrm');
            $table->string('KodeSupl');
            $table->string('NomorBon')->unique();
            $table->integer('TotalTrm');

            $table->foreign('KodeTrm')->references('KodeTrm')->on('detail_penerimaan');
            $table->foreign('KodeSupl')->references('KodeSupl')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerimaans');
    }
};
