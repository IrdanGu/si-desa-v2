# AGENTS.md - Dokumentasi Implementasi Chatbot KPSIDESA

> Dokumen ini berisi riwayat perubahan, fitur yang ditambahkan, dan masalah yang terjadi selama pengembangan chatbot layanan informasi 24 jam.

---

## 📋 Ringkasan Implementasi

**Fitur**: Chatbot sebagai Layanan Informasi 24 Jam  
**Tanggal Implementasi**: 26 Februari 2026  
**Status**: ✅ Implemented (dengan perbaikan)

---

## 🗂️ File yang Dibuat

### 1. Database & Models
```
database/migrations/2025_02_26_000001_create_chatbot_faqs_table.php
app/Models/ChatbotFaq.php
app/Models/ChatbotConversation.php
```

### 2. Service Layer
```
app/Services/ChatbotService.php          # Engine utama chatbot
```

### 3. Controllers
```
app/Http/Controllers/ChatbotController.php      # API endpoint untuk widget
app/Http/Controllers/ChatbotFaqController.php   # Admin panel FAQ
```

### 4. Views
```
resources/views/chatbot/widget.blade.php           # Widget frontend
resources/views/chatbot/admin/faq_index.blade.php  # List FAQ (admin)
resources/views/chatbot/admin/faq_create.blade.php # Form tambah FAQ
resources/views/chatbot/admin/faq_edit.blade.php   # Form edit FAQ
resources/views/chatbot/admin/analytics.blade.php  # Statistik penggunaan
```

### 5. Seeder
```
database/seeders/ChatbotFaqSeeder.php    # Data FAQ default
```

---

## 🔧 Perubahan pada File Existing

### 1. Routes (`routes/web.php`)
- Menambahkan import `ChatbotController`
- Menambahkan route group untuk chatbot API (public)
- Menambahkan route group untuk chatbot admin (middleware auth, admin)

### 2. Layout Frontend (`resources/views/constra_template/master.blade.php`)
- Menambahkan `meta name="csrf-token"` untuk keperluan AJAX
- Include widget chatbot di bagian bawah body

---

## 🎯 Fitur Chatbot

### Intent yang Didukung
| Intent | Keyword | Respon |
|--------|---------|--------|
| `sapaan` | halo, hi, selamat pagi | Sapaan berdasarkan waktu |
| `terimakasih` | terima kasih, thanks | Respon sopan |
| `berita_terbaru` | berita, news, update | List 5 berita terbaru dari DB |
| `agenda` | agenda, kegiatan, jadwal | List agenda mendatang |
| `layanan_surat` | surat, pengajuan, sktm, sku | Info layanan surat |
| `produk` | produk, umkm, jual, beli | Katalog produk UMKM |
| `profil_desa` | profil, desa, visi, misi | Info umum desa |
| `kontak` | kontak, telepon, wa, email | Info kontak kantor desa |
| `jam_operasional` | jam, buka, operasional | Jam kerja kantor |
| `bantuan` | bantuan, help, panduan | Panduan penggunaan |
| `faq` | - | Jawaban dari database FAQ |

### Fitur Widget
- ✅ Floating chat button (pojok kanan bawah)
- ✅ Expand/collapse chat panel
- ✅ Typing indicator
- ✅ Quick suggestion chips
- ✅ Conversation history per session
- ✅ Responsive design (mobile-friendly)
- ✅ LocalStorage untuk session ID

---

## ⚠️ Masalah yang Terjadi & Solusi

### Masalah 1: View Admin FAQ Not Found
**Error**: `View [chatbot.admin.faq_index] not found.`  
**Penyebab**: View untuk admin panel belum dibuat  
**Solusi**: Membuat 4 file view admin:
- `faq_index.blade.php`
- `faq_create.blade.php`
- `faq_edit.blade.php`
- `analytics.blade.php`

### Masalah 2: Chatbot Tidak Merespons
**Error**: Tidak ada balasan saat klik suggestion/kirim pesan  
**Penyebab**: 
1. CSRF token tidak tersedia di layout frontend
2. JavaScript menggunakan `route()` helper yang tidak ter-resolve
3. Fetch request tidak mengirim CSRF token dengan benar

**Solusi**:
1. Menambahkan `<meta name="csrf-token" content="{{ csrf_token() }}">` di `<head>`
2. Mengganti `route()` dengan URL hardcoded (`/chatbot/chat`, dll)
3. Membuat fungsi `getCsrfToken()` untuk mengambil token dari meta tag
4. Menambahkan error logging di console untuk debug

### Masalah 3: Widget Style Tidak Sesuai
**Error**: Tampilan widget tidak sesuai dengan tema website  
**Status**: Perlu penyesuaian CSS agar sesuai dengan tema Constra

---

## 🚀 Cara Setup

### 1. Jalankan Migration
```bash
php artisan migrate
```

### 2. Seed Data FAQ
```bash
php artisan db:seed --class=ChatbotFaqSeeder
```

### 3. Clear Cache
```bash
php artisan view:clear
php artisan route:clear
php artisan config:clear
```

---

## 📊 Admin Panel Routes

| Route | Method | Fungsi |
|-------|--------|--------|
| `/chatbot/faq` | GET | List semua FAQ |
| `/chatbot/faq/create` | GET | Form tambah FAQ |
| `/chatbot/faq` | POST | Simpan FAQ baru |
| `/chatbot/faq/{id}/edit` | GET | Form edit FAQ |
| `/chatbot/faq/{id}` | PUT | Update FAQ |
| `/chatbot/faq/{id}` | DELETE | Hapus FAQ |
| `/chatbot/analytics` | GET | Statistik penggunaan |

---

## 🔌 API Endpoints (Public)

| Endpoint | Method | Parameter | Response |
|----------|--------|-----------|----------|
| `/chatbot/chat` | POST | message, session_id | JSON response |
| `/chatbot/history` | GET | session_id | Conversation history |
| `/chatbot/clear` | POST | - | Reset session |

---

## 📝 Struktur Database

### Tabel `chatbot_faqs`
| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id | bigint | PK |
| category | string | umum/layanan/produk/berita |
| question | string | Pertanyaan |
| answer | text | Jawaban |
| keywords | json | Kata kunci untuk matching |
| is_active | boolean | Status aktif |
| timestamps | - | created_at, updated_at |

### Tabel `chatbot_conversations`
| Kolom | Tipe | Keterangan |
|-------|------|------------|
| id | bigint | PK |
| session_id | string | ID session user |
| user_id | bigint | FK ke users (nullable) |
| user_message | text | Pesan user |
| bot_response | text | Respon bot |
| intent_detected | string | Intent yang terdeteksi |
| timestamps | - | created_at, updated_at |

---

## 🔮 Pengembangan Berikutnya

1. **Integrasi AI** - Gunakan OpenAI API untuk respons lebih cerdas
2. **Voice Input** - Tambahkan speech-to-text
3. **WhatsApp Integration** - Hubungkan dengan WhatsApp Business API
4. **Multilingual** - Dukung bahasa daerah
5. **Advanced Analytics** - Heatmap percakapan, sentiment analysis

---

## 🐛 Known Issues

1. Widget menggunakan style inline yang mungkin bentrok dengan tema
2. Belum ada fitur export/import FAQ
3. Belum ada notifikasi real-time untuk admin

---

*Last Updated: 26 Februari 2026*
