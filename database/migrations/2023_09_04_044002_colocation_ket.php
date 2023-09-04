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
        Schema::create('colocation_ket', function (Blueprint $table) {
            $table->integer('nomor_formulir');
            $table->string('nama_instansi');
            $table->string('nama_penanggung_jawab');
            $table->string('nip');
            $table->string('kontak_personal');
            $table->string('jenis_server');
            $table->date('tanggal_masuk');
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
