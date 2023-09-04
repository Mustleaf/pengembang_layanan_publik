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
        Schema::create('permohonan_akses_fisik_data_center', function (Blueprint $table) {
            $table->integer('telp_hp');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('nama');
            $table->string('dari');
            $table->string('keperluan_pengunjung');
            $table->string('deskripsi_hardware');
            $table->string('no_serial_hardware');
            $table->string('masuk');
            $table->string('keluar');
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
