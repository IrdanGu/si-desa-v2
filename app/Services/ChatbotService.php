<?php

namespace App\Services;

use App\Models\ChatbotFaq;
use App\Models\ChatbotConversation;
use App\Models\Berita;
use App\Models\Agenda;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ChatbotService
{
    // Intent yang didukung
    const INTENTS = [
        'berita_terbaru' => ['berita', 'news', 'info terbaru', 'update', 'kabar'],
        'agenda' => ['agenda', 'kegiatan', 'acara', 'event', 'jadwal'],
        'layanan_surat' => ['surat', 'pengajuan', 'sktm', 'sku', 'domisili', 'layanan'],
        'produk' => ['produk', 'jual', 'beli', 'umkm', 'dagangan', 'katalog'],
        'profil_desa' => ['profil', 'desa', 'alamat', 'lokasi', 'visi', 'misi'],
        'kontak' => ['kontak', 'hubungi', 'telepon', 'wa', 'whatsapp', 'email'],
        'jam_operasional' => ['jam', 'buka', 'operasional', 'kapan', 'waktu'],
        'bantuan' => ['bantuan', 'help', 'tolong', 'cara', 'panduan'],
    ];

    // FAQ statis
    const STATIC_RESPONSES = [
        'sapaan' => [
            'halo', 'hi', 'hey', 'selamat pagi', 'selamat siang', 
            'selamat sore', 'selamat malam', 'assalamualaikum'
        ],
        'terimakasih' => [
            'terima kasih', 'thanks', 'makasih', 'thank you', 'tq'
        ],
    ];

    /**
     * Proses pesan user dan generate response
     */
    public function processMessage(string $message, string $sessionId, ?int $userId = null): array
    {
        $message = strtolower(trim($message));
        
        // Deteksi intent
        $intent = $this->detectIntent($message);
        
        // Generate response berdasarkan intent
        $response = $this->generateResponse($intent, $message);
        
        // Simpan percakapan
        $this->saveConversation($sessionId, $userId, $message, $response['text'], $intent['type']);
        
        return $response;
    }

    /**
     * Deteksi intent dari pesan user
     */
    private function detectIntent(string $message): array
    {
        // Cek sapaan
        foreach (self::STATIC_RESPONSES['sapaan'] as $sapaan) {
            if (strpos($message, $sapaan) !== false) {
                return ['type' => 'sapaan', 'confidence' => 1.0];
            }
        }

        // Cek terima kasih
        foreach (self::STATIC_RESPONSES['terimakasih'] as $thanks) {
            if (strpos($message, $thanks) !== false) {
                return ['type' => 'terimakasih', 'confidence' => 1.0];
            }
        }

        // Cek intent dari database FAQ
        $faqs = ChatbotFaq::active()->get();
        foreach ($faqs as $faq) {
            if ($faq->keywords) {
                foreach ($faq->keywords as $keyword) {
                    if (strpos($message, strtolower($keyword)) !== false) {
                        return [
                            'type' => 'faq',
                            'faq_id' => $faq->id,
                            'confidence' => 0.9
                        ];
                    }
                }
            }
        }

        // Cek intent berdasarkan keyword mapping
        foreach (self::INTENTS as $intent => $keywords) {
            foreach ($keywords as $keyword) {
                if (strpos($message, $keyword) !== false) {
                    return ['type' => $intent, 'confidence' => 0.8];
                }
            }
        }

        // Default: tidak dikenali
        return ['type' => 'unknown', 'confidence' => 0.0];
    }

    /**
     * Generate response berdasarkan intent
     */
    private function generateResponse(array $intent, string $message): array
    {
        switch ($intent['type']) {
            case 'sapaan':
                return [
                    'text' => $this->getGreetingResponse(),
                    'type' => 'text',
                    'suggestions' => ['Berita terbaru', 'Agenda desa', 'Layanan surat', 'Produk UMKM']
                ];

            case 'terimakasih':
                return [
                    'text' => 'Sama-sama! 😊 Jika ada yang ingin ditanyakan lagi, silakan hubungi saya kapan saja.',
                    'type' => 'text',
                    'suggestions' => []
                ];

            case 'faq':
                $faq = ChatbotFaq::find($intent['faq_id']);
                return [
                    'text' => $faq ? $faq->answer : $this->getUnknownResponse(),
                    'type' => 'text',
                    'suggestions' => $this->getRelatedSuggestions($faq->category ?? 'umum')
                ];

            case 'berita_terbaru':
                return $this->getBeritaResponse();

            case 'agenda':
                return $this->getAgendaResponse();

            case 'layanan_surat':
                return $this->getLayananSuratResponse();

            case 'produk':
                return $this->getProdukResponse();

            case 'profil_desa':
                return $this->getProfilResponse();

            case 'kontak':
                return $this->getKontakResponse();

            case 'jam_operasional':
                return [
                    'text' => "🕐 **Jam Operasional Kantor Desa**\n\n" .
                              "Senin - Kamis: 08.00 - 14.00 WIB\n" .
                              "Jumat: 08.00 - 11.00 WIB\n\n" .
                              "*Chatbot ini tersedia 24 jam untuk informasi dasar.*",
                    'type' => 'text',
                    'suggestions' => ['Layanan surat', 'Kontak admin']
                ];

            case 'bantuan':
                return [
                    'text' => "🤖 **Panduan Penggunaan Chatbot**\n\n" .
                              "Anda bisa menanyakan:\n" .
                              "• **Berita** - Info terbaru dari desa\n" .
                              "• **Agenda** - Jadwal kegiatan desa\n" .
                              "• **Layanan** - Info pengajuan surat\n" .
                              "• **Produk** - Katalog UMKM desa\n" .
                              "• **Kontak** - Nomor telepon/WhatsApp\n\n" .
                              "Atau ketik pertanyaan langsung!",
                    'type' => 'text',
                    'suggestions' => ['Berita terbaru', 'Agenda desa', 'Layanan surat']
                ];

            default:
                return [
                    'text' => $this->getUnknownResponse(),
                    'type' => 'text',
                    'suggestions' => ['Bantuan', 'Kontak admin']
                ];
        }
    }

    /**
     * Response berita terbaru
     */
    private function getBeritaResponse(): array
    {
        $berita = Berita::orderBy('created_at', 'desc')->limit(5)->get();
        
        if ($berita->isEmpty()) {
            return [
                'text' => 'Belum ada berita terbaru saat ini.',
                'type' => 'text',
                'suggestions' => ['Agenda desa', 'Produk UMKM']
            ];
        }

        $text = "📰 **Berita Terbaru**\n\n";
        foreach ($berita as $index => $item) {
            $text .= ($index + 1) . ". **{$item->judul}**\n";
            $text .= "   📅 " . $item->created_at->format('d M Y') . "\n";
            $text .= "   🔗 [Baca selengkapnya](" . route('berita.show', $item->slug) . ")\n\n";
        }

        return [
            'text' => $text,
            'type' => 'list',
            'data' => $berita,
            'suggestions' => ['Agenda desa', 'Layanan surat']
        ];
    }

    /**
     * Response agenda
     */
    private function getAgendaResponse(): array
    {
        $agenda = Agenda::where('tanggal', '>=', now())
            ->orderBy('tanggal', 'asc')
            ->limit(5)
            ->get();

        if ($agenda->isEmpty()) {
            return [
                'text' => 'Tidak ada agenda mendatang saat ini.',
                'type' => 'text',
                'suggestions' => ['Berita terbaru', 'Produk UMKM']
            ];
        }

        $text = "📅 **Agenda Mendatang**\n\n";
        foreach ($agenda as $index => $item) {
            $text .= ($index + 1) . ". **{$item->nama_agenda}**\n";
            $text .= "   📆 " . $item->tanggal->format('d M Y');
            if ($item->jam) {
                $text .= " | 🕐 {$item->jam}";
            }
            $text .= "\n";
            if ($item->tempat) {
                $text .= "   📍 {$item->tempat}\n";
            }
            $text .= "\n";
        }

        return [
            'text' => $text,
            'type' => 'list',
            'data' => $agenda,
            'suggestions' => ['Berita terbaru', 'Layanan surat']
        ];
    }

    /**
     * Response layanan surat
     */
    private function getLayananSuratResponse(): array
    {
        return [
            'text' => "📋 **Layanan Surat Online**\n\n" .
                      "Kami menyediakan pengajuan surat secara online:\n\n" .
                      "1️⃣ **SKTM** (Surat Keterangan Tidak Mampu)\n" .
                      "2️⃣ **SKU** (Surat Keterangan Usaha)\n" .
                      "3️⃣ **Surat Domisili**\n\n" .
                      "**Cara mengajukan:**\n" .
                      "1. Login ke akun Anda\n" .
                      "2. Pilih menu 'Pengajuan Surat'\n" .
                      "3. Isi form dengan data yang benar\n" .
                      "4. Tunggu konfirmasi via WhatsApp\n\n" .
                      "⏱️ Proses: 1-3 hari kerja",
            'type' => 'text',
            'suggestions' => ['Login', 'Daftar akun', 'Jam operasional']
        ];
    }

    /**
     * Response produk
     */
    private function getProdukResponse(): array
    {
        $produk = Product::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        if ($produk->isEmpty()) {
            return [
                'text' => 'Belum ada produk yang tersedia saat ini.',
                'type' => 'text',
                'suggestions' => ['Berita terbaru', 'Agenda desa']
            ];
        }

        $text = "🛒 **Produk UMKM Desa**\n\n";
        foreach ($produk as $index => $item) {
            $text .= ($index + 1) . ". **{$item->nama}**\n";
            $text .= "   💰 Rp " . number_format($item->harga, 0, ',', '.') . "\n";
            $text .= "   🔗 [Lihat detail](" . route('produk.show', $item->slug) . ")\n\n";
        }

        $text .= "💬 Ingin memesan? Klik produk untuk hubungi via WhatsApp.";

        return [
            'text' => $text,
            'type' => 'list',
            'data' => $produk,
            'suggestions' => ['Lihat semua produk', 'Berita terbaru']
        ];
    }

    /**
     * Response profil desa
     */
    private function getProfilResponse(): array
    {
        return [
            'text' => "🏘️ **Profil Desa**\n\n" .
                      "Selamat datang di Sistem Informasi Desa kami!\n\n" .
                      "**Layanan yang tersedia:**\n" .
                      "• Informasi berita dan agenda\n" .
                      "• Pengajuan surat online\n" .
                      "• Katalog produk UMKM\n" .
                      "• Data aparatur desa\n" .
                      "• Galeri kegiatan\n\n" .
                      "📍 [Lihat peta lokasi](" . route('indexuser') . ")\n" .
                      "📖 [Visi & Misi](" . route('visimisi') . ")",
            'type' => 'text',
            'suggestions' => ['Kontak', 'Layanan surat', 'Agenda desa']
        ];
    }

    /**
     * Response kontak
     */
    private function getKontakResponse(): array
    {
        $whatsapp = config('services.whatsapp.number', '628xxxxxxxxxx');
        
        return [
            'text' => "📞 **Kontak Kami**\n\n" .
                      "Butuh bantuan lebih lanjut?\n\n" .
                      "💬 **WhatsApp:** [Chat sekarang](https://wa.me/{$whatsapp})\n" .
                      "📧 **Email:** admin@desa.go.id\n" .
                      "📍 **Alamat:** Kantor Desa [Nama Desa]\n\n" .
                      "⏰ Jam operasional: Senin-Jumat (08.00-14.00)",
            'type' => 'text',
            'suggestions' => ['Jam operasional', 'Layanan surat']
        ];
    }

    /**
     * Response sapaan berdasarkan waktu
     */
    private function getGreetingResponse(): string
    {
        $hour = now()->hour;
        
        if ($hour >= 5 && $hour < 11) {
            $greeting = 'Selamat pagi';
        } elseif ($hour >= 11 && $hour < 15) {
            $greeting = 'Selamat siang';
        } elseif ($hour >= 15 && $hour < 18) {
            $greeting = 'Selamat sore';
        } else {
            $greeting = 'Selamat malam';
        }

        return "{$greeting}! 👋\n\n" .
               "Saya adalah asisten virtual Desa yang siap membantu Anda 24 jam.\n\n" .
               "Ada yang bisa saya bantu? Anda bisa menanyakan:\n" .
               "• Berita terbaru\n" .
               "• Agenda kegiatan\n" .
               "• Layanan surat\n" .
               "• Produk UMKM\n" .
               "• Informasi lainnya";
    }

    /**
     * Response untuk pesan tidak dikenali
     */
    private function getUnknownResponse(): string
    {
        $responses = [
            "Maaf, saya belum memahami pertanyaan Anda. 😅\n\n" .
            "Coba ketik: **bantuan** untuk melihat panduan penggunaan.",
            
            "Hmm, saya belum bisa menjawab itu. 🤔\n\n" .
            "Silakan ketik **bantuan** atau hubungi admin kami.",
            
            "Maaf, saya masih belajar. 🎓\n\n" .
            "Ketik **bantuan** untuk melihat apa saja yang bisa saya bantu.",
        ];

        return $responses[array_rand($responses)];
    }

    /**
     * Get related suggestions
     */
    private function getRelatedSuggestions(string $category): array
    {
        $suggestions = [
            'umum' => ['Berita terbaru', 'Agenda desa', 'Bantuan'],
            'layanan' => ['SKTM', 'SKU', 'Surat domisili'],
            'produk' => ['Lihat katalog', 'Cara pesan'],
            'berita' => ['Agenda desa', 'Produk UMKM'],
        ];

        return $suggestions[$category] ?? ['Bantuan'];
    }

    /**
     * Simpan percakapan ke database
     */
    private function saveConversation(string $sessionId, ?int $userId, string $message, string $response, string $intent): void
    {
        try {
            ChatbotConversation::create([
                'session_id' => $sessionId,
                'user_id' => $userId,
                'user_message' => $message,
                'bot_response' => $response,
                'intent_detected' => $intent,
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to save chatbot conversation: ' . $e->getMessage());
        }
    }

    /**
     * Get conversation history
     */
    public function getHistory(string $sessionId): array
    {
        $conversations = ChatbotConversation::getHistory($sessionId);
        
        $history = [];
        foreach ($conversations as $conv) {
            $history[] = [
                'role' => 'user',
                'message' => $conv->user_message,
                'time' => $conv->created_at->format('H:i'),
            ];
            $history[] = [
                'role' => 'bot',
                'message' => $conv->bot_response,
                'time' => $conv->created_at->format('H:i'),
            ];
        }

        return $history;
    }
}
