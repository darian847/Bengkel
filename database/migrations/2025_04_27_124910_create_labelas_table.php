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
        Schema::create('labelas', function (Blueprint $table) {
            $table->id();
            $table->string('nospk')->unique();
            $table->string('kepada')->nullable();
            $table->string('jenisrepair')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('estimasi')->nullable();
            $table->string('sinput1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labelas');
    }
};
