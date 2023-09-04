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
        Schema::create('colocation_form_hak_akses_server', function (Blueprint $table) {
            $table->no();
            $table->string('nama_pemilik_akses');
            $table->string('nomor_handphone');
            $table->string('alamat_ip');
            $table->string('posisi_server');
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
