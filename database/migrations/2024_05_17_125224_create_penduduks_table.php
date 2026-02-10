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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->string('nik')->primary()->unique();
            $table->string('no_kk');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('hubungan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('dusun');
            $table->string('rt');
            $table->string('rw');
            $table->string('desa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
