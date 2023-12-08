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
        Schema::create('supplier', function (Blueprint $table) {
            $table->string('KodeSupl');
            $table->string('NamaSupl');
            $table->text('AlamatSupl')->nullable()->default('None');
            $table->string('TeleponSupl');
            $table->string('EmailSupl')->unique();

            $table->foreign('KodeSupl')->references('kode')->on('users');
            $table->foreign('EmailSupl')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
