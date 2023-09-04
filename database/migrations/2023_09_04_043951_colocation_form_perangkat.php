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
        Schema::create('colocation_form_perangkat', function (Blueprint $table) {
            $table->no();
            $table->string('keterangan');
            $table->string('nama_perangkat');
            $table->string('merk_perangkat');
            $table->string('nomor_seri');
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
