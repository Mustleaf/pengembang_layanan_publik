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
        Schema::create('surat_pengajuan_server', function (Blueprint $table) {
            $table->integer('nomor');
            $table->date('tanggal');
            $table->string('sifat');
            $table->string('lampiran');
            $table->string('perihal');
            $table->string('nama_instansi');
            $table->string('tujuan');
            $table->string('nama');
            $table->string('nomor_telepon');
            $table->string('keperluan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
