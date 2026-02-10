<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('surat__KeteranganUsaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('kk');
            $table->string('nama');
            $table->string('alamat');
            $table->enum('pilihsurat', ['Surat Keterangan Tidak Mampu', 'Surat Keterangan Usaha']);
            $table->string('fotoktp');
            $table->string('fotokk');
            $table->string('permohonan');
            $table->string('deskripsi');
            $table->string('no_hp');
            $table->enum('status', ['Approve', 'Cancel']);
            $table->boolean('is_read')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('nik')->references('nik')->on('penduduk')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat__KeteranganUsaha');
    }
};
