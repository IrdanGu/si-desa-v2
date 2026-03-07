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
        if (Schema::hasTable('surat__keteranganusaha')) {
            Schema::table('surat__keteranganusaha', function (Blueprint $table) {
                if (! Schema::hasColumn('surat__keteranganusaha', 'no_surat')) {
                    $table->string('no_surat')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'no_kk')) {
                    $table->string('no_kk')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'jenis_kelamin')) {
                    $table->string('jenis_kelamin')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'tempat_lahir')) {
                    $table->string('tempat_lahir')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'tanggal_lahir')) {
                    $table->date('tanggal_lahir')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'status_penduduk')) {
                    $table->string('status_penduduk')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'pekerjaan')) {
                    $table->string('pekerjaan')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'dusun')) {
                    $table->string('dusun')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'rt')) {
                    $table->string('rt')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'rw')) {
                    $table->string('rw')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'id_kades')) {
                    $table->unsignedBigInteger('id_kades')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'nama_ttd')) {
                    $table->string('nama_ttd')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'ttd')) {
                    $table->string('ttd')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'fotoktp')) {
                    $table->string('fotoktp')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'foto_kk')) {
                    $table->string('foto_kk')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'permohonan')) {
                    $table->string('permohonan')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'bidang_usaha')) {
                    $table->string('bidang_usaha')->nullable();
                }
                if (! Schema::hasColumn('surat__keteranganusaha', 'is_read')) {
                    $table->boolean('is_read')->default(false);
                }
            });

            return;
        }

        Schema::create('surat__keteranganusaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('no_surat')->nullable();
            $table->string('no_kk');
            $table->string('nama');
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('status_penduduk')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('dusun')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->unsignedBigInteger('id_kades')->nullable();
            $table->string('nama_ttd')->nullable();
            $table->string('ttd')->nullable();
            $table->enum('pilihsurat', ['Surat Keterangan Tidak Mampu', 'Surat Keterangan Usaha', 'Surat Keterangan Domisili']);
            $table->string('fotoktp')->nullable();
            $table->string('foto_kk')->nullable();
            $table->string('permohonan')->nullable();
            $table->string('no_hp');
            $table->string('bidang_usaha')->nullable();
            $table->enum('status', ['Approve', 'Cancel']);
            $table->boolean('is_read')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat__keteranganusaha');
    }
};
