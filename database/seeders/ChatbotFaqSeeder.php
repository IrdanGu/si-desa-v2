<?php

namespace Database\Seeders;

use App\Models\ChatbotFaq;
use Illuminate\Database\Seeder;

class ChatbotFaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            // Kategori Umum
            [
                'category' => 'umum',
                'question' => 'Apa itu SIDesa?',
                'answer' => "SIDesa (Sistem Informasi Desa) adalah platform digital untuk mengelola dan menyebarkan informasi desa secara efektif.\n\n**Fitur utama:**\n• Informasi berita dan agenda desa\n• Pengajuan surat online\n• Katalog produk UMKM\n• Data aparatur dan penduduk\n• Galeri kegiatan desa",
                'keywords' => ['sidesa', 'sistem informasi', 'aplikasi', 'website', 'platform'],
            ],
            [
                'category' => 'umum',
                'question' => 'Bagaimana cara mendaftar akun?',
                'answer' => "**Cara daftar akun:**\n\n1. Klik menu 'Daftar' atau 'Register'\n2. Isi data lengkap (Nama, Email, Password)\n3. Verifikasi email (jika diminta)\n4. Login dengan akun baru Anda\n\n*Catatan: Akun yang terdaftar akan memiliki level 'user' secara default.*",
                'keywords' => ['daftar', 'register', 'signup', 'akun', 'login', 'masuk'],
            ],
            
            // Kategori Layanan
            [
                'category' => 'layanan',
                'question' => 'Berapa lama proses pengajuan surat?',
                'answer' => "**Estimasi waktu pengajuan surat:**\n\n• **SKTM**: 1-2 hari kerja\n• **SKU**: 1-2 hari kerja\n• **Surat Domisili**: 1 hari kerja\n\nStatus pengajuan dapat dicek melalui menu 'Riwayat Surat' setelah login. Anda juga akan menerima notifikasi via WhatsApp saat surat sudah selesai.",
                'keywords' => ['lama', 'waktu', 'proses', 'berapa hari', 'estimasi', 'durasi'],
            ],
            [
                'category' => 'layanan',
                'question' => 'Apa syarat pengajuan SKTM?',
                'answer' => "**Syarat pengajuan SKTM (Surat Keterangan Tidak Mampu):**\n\n1. NIK terdaftar di database desa\n2. Fotokopi KTP\n3. Fotokopi KK\n4. Surat pengantar RT/RW (jika diminta)\n\nPengajuan dapat dilakukan secara online melalui menu 'Pengajuan Surat' setelah login.",
                'keywords' => ['syarat', 'sktm', 'tidak mampu', 'dokumen', 'persyaratan'],
            ],
            [
                'category' => 'layanan',
                'question' => 'Bagaimana cara cek status surat?',
                'answer' => "**Cara cek status pengajuan surat:**\n\n1. Login ke akun Anda\n2. Pilih menu 'Riwayat Surat' atau 'Status Pengajuan'\n3. Lihat status pada tabel pengajuan\n\n**Status yang tersedia:**\n• 🟡 **Pending**: Menunggu verifikasi admin\n• 🟢 **Approved**: Surat telah disetujui\n• 🔴 **Rejected**: Pengajuan ditolak (cek alasan)\n\nNotifikasi juga akan dikirim via WhatsApp.",
                'keywords' => ['cek', 'status', 'tracking', 'lacak', 'where', 'sudah jadi'],
            ],
            
            // Kategori Produk
            [
                'category' => 'produk',
                'question' => 'Bagaimana cara memesan produk UMKM?',
                'answer' => "**Cara memesan produk UMKM:**\n\n1. Buka menu 'Produk' atau 'Katalog UMKM'\n2. Pilih produk yang diminati\n3. Klik tombol 'Pesan via WhatsApp'\n4. Chat langsung dengan penjual untuk transaksi\n\n*Pembayaran dan pengiriman diatur langsung antara pembeli dan penjual.*",
                'keywords' => ['pesan', 'beli', 'order', 'cara membeli', 'transaksi', 'pembayaran'],
            ],
            [
                'category' => 'produk',
                'question' => 'Bagaimana cara jualan di katalog UMKM?',
                'answer' => "**Cara mendaftarkan produk UMKM:**\n\n1. Hubungi admin desa via WhatsApp atau datang ke kantor desa\n2. Sampaikan nama produk, harga, deskripsi, dan foto\n3. Admin akan memverifikasi dan mengupload produk Anda\n4. Produk akan muncul di katalog UMKM\n\n*Persyaratan: Warga desa dengan usaha aktif.*",
                'keywords' => ['jualan', 'jual', 'daftar', 'umkm', 'usaha', 'dagang'],
            ],
            
            // Kategori Berita
            [
                'category' => 'berita',
                'question' => 'Bagaimana cara submit berita?',
                'answer' => "**Cara mengirimkan berita/artikel:**\n\n1. Login dengan akun admin atau karang taruna\n2. Pilih menu 'Berita' > 'Tambah Berita'\n3. Isi judul, konten, dan upload gambar\n4. Klik 'Simpan'\n\n*Untuk warga biasa, kirimkan materi berita ke admin via WhatsApp.*",
                'keywords' => ['submit', 'kirim berita', 'tulis', 'artikel', 'posting'],
            ],
            
            // Kategori Kontak
            [
                'category' => 'umum',
                'question' => 'Apa nomor telepon kantor desa?',
                'answer' => "**Kontak Kantor Desa:**\n\n📞 **Telepon**: (0266) xxx-xxxx\n💬 **WhatsApp**: [Klik untuk chat](https://wa.me/628xxxxxxxxxx)\n📧 **Email**: admin@desa.go.id\n📍 **Alamat**: [Alamat Kantor Desa]\n\n⏰ **Jam Operasional:**\nSenin-Kamis: 08.00 - 14.00 WIB\nJumat: 08.00 - 11.00 WIB",
                'keywords' => ['telepon', 'nomor', 'kontak', 'whatsapp', 'wa', 'email', 'alamat'],
            ],
        ];

        foreach ($faqs as $faq) {
            ChatbotFaq::create($faq);
        }
    }
}
