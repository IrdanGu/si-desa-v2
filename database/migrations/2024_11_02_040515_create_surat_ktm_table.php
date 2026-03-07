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
        if (Schema::hasTable('surat')) {
            Schema::table('surat', function (Blueprint $table) {
                if (! Schema::hasColumn('surat', 'no_surat')) {
                    $table->string('no_surat')->nullable();
                }
                if (! Schema::hasColumn('surat', 'jenis_kelamin')) {
                    $table->string('jenis_kelamin')->nullable();
                }
                if (! Schema::hasColumn('surat', 'tempat_lahir')) {
                    $table->string('tempat_lahir')->nullable();
                }
                if (! Schema::hasColumn('surat', 'tanggal_lahir')) {
                    $table->date('tanggal_lahir')->nullable();
                }
                if (! Schema::hasColumn('surat', 'status_penduduk')) {
                    $table->string('status_penduduk')->nullable();
                }
                if (! Schema::hasColumn('surat', 'pekerjaan')) {
                    $table->string('pekerjaan')->nullable();
                }
                if (! Schema::hasColumn('surat', 'dusun')) {
                    $table->string('dusun')->nullable();
                }
                if (! Schema::hasColumn('surat', 'rt')) {
                    $table->string('rt')->nullable();
                }
                if (! Schema::hasColumn('surat', 'rw')) {
                    $table->string('rw')->nullable();
                }
                if (! Schema::hasColumn('surat', 'id_kades')) {
                    $table->unsignedBigInteger('id_kades')->nullable();
                }
                if (! Schema::hasColumn('surat', 'nama_ttd')) {
                    $table->string('nama_ttd')->nullable();
                }
                if (! Schema::hasColumn('surat', 'ttd')) {
                    $table->string('ttd')->nullable();
                }
                if (! Schema::hasColumn('surat', 'foto_ktp')) {
                    $table->string('foto_ktp')->nullable();
                }
                if (! Schema::hasColumn('surat', 'foto_kk')) {
                    $table->string('foto_kk')->nullable();
                }
                if (! Schema::hasColumn('surat', 'permohonan')) {
                    $table->string('permohonan')->nullable();
                }
            });

            return;
        }

        Schema::create('surat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik');
            $table->string('no_surat')->nullable();
            $table->string('no_kk');
            $table->string('nama');
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir');
            $table->string('status_penduduk')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('dusun')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->unsignedBigInteger('id_kades')->nullable();
            $table->string('nama_ttd')->nullable();
            $table->string('ttd')->nullable();
            $table->enum('pilihsurat', ['Surat Keterangan Tidak Mampu', 'Surat Keterangan Usaha', 'Surat Keterangan Domisili']);
            $table->string('foto_ktp')->nullable();
            $table->string('foto_kk')->nullable();
            $table->string('permohonan')->nullable();
            $table->string('no_hp');
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
        Schema::dropIfExists('surat');
    }
};
