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
        Schema::create('plabelas', function (Blueprint $table) {
            $table->id();
            $table->string('namasa');
            $table->string('warna');
            $table->string('jumlah');
            $table->string('mesin');
            $table->string('batch');
            $table->string('tanggal');
            $table->string('shift');
            $table->string('namainput');
            $table->string('baris3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plabelas');
    }
};
