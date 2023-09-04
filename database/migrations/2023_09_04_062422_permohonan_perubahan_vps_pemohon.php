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
        Schema::create('permohonan_perubahan_vps_pemohon', function (Blueprint $table) {
            $table->integer('nip');
            $table->string('instansi');
            $table->string('nama_pemohon');
            $table->string('tujuan_pembuatan_vps');
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
