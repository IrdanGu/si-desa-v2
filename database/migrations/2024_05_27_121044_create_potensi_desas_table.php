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
        Schema::create('potensi_desa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensi_desa');
    }
};
