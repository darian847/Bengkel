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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nospk')->unique();
            $table->string('tanggal1')->nullable();
            $table->string('pemohon')->nullable();
            $table->string('dept')->nullable();
            $table->string('nomesin')->nullable();
            $table->string('uraianbag1')->nullable();
            $table->string('tanggal2')->nullable();
            $table->string('tanggal3')->nullable();
            $table->string('pekerja')->nullable();
            $table->string('tanggal4')->nullable();
            $table->string('mouldgiver')->nullable();
            $table->string('tindakperbaikan')->nullable();
            $table->string('penerimabagus')->nullable();
            $table->string('tanggal5')->nullable();
            $table->string('ok')->nullable();
            $table->string('gkok')->nullable();
            $table->string('catatan')->nullable();
            $table->string('sinput1')->nullable();
            $table->string('sinput2')->nullable();
            $table->string('sinput3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
