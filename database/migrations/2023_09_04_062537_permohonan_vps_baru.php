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
        Schema::create('permohonan_vps_baru', function (Blueprint $table) {
            $table->integer('nip');
            $table->string('nama_pemohon_vps_baru');
            $table->string('instansi');
            $table->string('prosesor');
            $table->string('hardisk');
            $table->string('ip_address');
            $table->string('remote_desktop');
            $table->string('sistem_operasi');
            $table->string('ram');
            $table->string('ssh');
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
