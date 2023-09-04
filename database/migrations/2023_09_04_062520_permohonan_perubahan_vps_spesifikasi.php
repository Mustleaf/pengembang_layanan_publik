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
        Schema::create('permohonan_perubahan_vps_spesifikasi', function (Blueprint $table) {
            $table->string('prosesor');
            $table->string('sistem_operasi');
            $table->string('hardisk');
            $table->string('akun_akses_non_fisik');
            $table->string('ram');
            $table->string('ip_address');
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
