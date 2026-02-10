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
        Schema::create('surat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('no_surat');
            $table->string('no_kk');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_penduduk');
            $table->string('pekerjaan');
            $table->string('dusun');
            $table->string('rt');
            $table->string('rw');
            $table->unsignedBigInteger('id_kades');
            $table->string('nama_ttd');
            $table->string('ttd');
            $table->enum('pilihsurat', ['Surat Keterangan Tidak Mampu', 'Surat Keterangan Usaha','Surat Keterangan Domisili']);
            $table->string('foto_ktp');
            $table->string('foto_kk');
            $table->string('permohonan');
            $table->string('no_hp');
            $table->enum('status', ['Approve', 'Cancel']);
            $table->boolean('is_read')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('nik')->references('nik')->on('penduduk')->onDelete('cascade');
            $table->foreign('id_kades')->references('id')->on('kepala_desa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
