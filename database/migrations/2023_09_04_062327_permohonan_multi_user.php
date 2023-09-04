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
        Schema::create('permohonan_multi_user', function (Blueprint $table) {
            $table->integer('nip');
            $table->string('nama_lengkap');
            $table->string('pangkat_golongan');
            $table->string('jabatan');
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
