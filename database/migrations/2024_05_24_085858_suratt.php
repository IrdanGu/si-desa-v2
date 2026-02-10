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
            $table->string('no_kk');
            $table->string('nama');
            $table->string('alamat');
            $table->enum('pilihsurat', ['Surat Keterangan Tidak Mampu', 'Surat Keterangan Usaha']);
            $table->string('no_hp');
            $table->boolean('is_read')->default(false);
            $table->enum('status', ['Approve', 'Cancel']);
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
        Schema::dropIfExists('surat');
    }
};
