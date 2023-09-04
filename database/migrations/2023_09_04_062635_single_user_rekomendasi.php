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
        Schema::create('single_user_rekomendasi', function (Blueprint $table) {
            $table->integer('nip');
            $table->string('nama_lengkap');
            $table->integer('nik');
            $table->string('pangkat_golongan');
            $table->string('instansi');
            $table->string('unit_kerja');
            $table->string('alamat_email');
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
