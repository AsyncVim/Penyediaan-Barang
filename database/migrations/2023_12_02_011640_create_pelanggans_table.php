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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->string('KodeCust');
            $table->string('NamaCust');
            $table->text('AlamatCust')->nullable()->default('None');
            $table->string('TeleponCust');
            $table->string('EmailCust')->unique();

            $table->foreign('KodeCust')->references('kode')->on('users');
            $table->foreign('EmailCust')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
