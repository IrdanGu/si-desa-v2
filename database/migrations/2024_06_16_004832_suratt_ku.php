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
        // Legacy migration kept for history only.
        // The canonical surat usaha table is created later by
        // 2024_11_02_041910_create_surat_keterangan_usaha_table.php.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat__KeteranganUsaha');
    }
};
