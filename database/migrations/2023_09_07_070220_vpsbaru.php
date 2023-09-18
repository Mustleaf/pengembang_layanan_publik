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
        Schema::create('vps_baru', function (Blueprint $table) {
            $table->Increments('id_vps_baru');
            $table->Integer('id_layanan');
            $table->String('nama_pemohon');
            $table->String('instansi');
            $table->String('nip');
            $table->String('tujuan_pembuatan_vps');
            $table->String('prosesor');
            $table->String('sistem_operasi');
            $table->boolean('hard_disk')->default(false);
            $table->boolean('ram')->default(false);
            $table->String('ip_address');
            $table->boolean('akun_akses_non_fisik')->default(false);
            $table->timestamp('created_at');
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
