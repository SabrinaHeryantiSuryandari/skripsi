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
        Schema::create('validasi_pesanans', function (Blueprint $table) {
            $table->id();
            $table->integer('pesanans_id')->constrained();
            $table->biginteger('total');
            $table->string('status')->nullable()->default('pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasi_pesanans');
    }
};
