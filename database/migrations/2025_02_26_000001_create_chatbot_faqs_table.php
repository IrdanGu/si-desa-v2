<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chatbot_faqs', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // umum, layanan, produk, berita
            $table->string('question');
            $table->text('answer');
            $table->json('keywords')->nullable(); // kata kunci untuk matching
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('chatbot_conversations', function (Blueprint $table) {
            $table->id();
            $table->string('session_id'); // untuk tracking session
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->text('user_message');
            $table->text('bot_response');
            $table->string('intent_detected')->nullable(); // intent yang terdeteksi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chatbot_conversations');
        Schema::dropIfExists('chatbot_faqs');
    }
};
