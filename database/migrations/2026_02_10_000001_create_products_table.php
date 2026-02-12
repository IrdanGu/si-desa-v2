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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 150);
            $table->string('slug', 180)->unique();
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 15, 2)->nullable();
            $table->unsignedInteger('stok')->default(0);
            $table->string('status', 20)->default('draft');
            $table->boolean('is_featured')->default(false);
            $table->string('wa_phone_override', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
