# Aplikasi Perpustakaan Digital Kampus

Aplikasi berbasis web untuk mengelola data buku, anggota, dan transaksi peminjaman di perpustakaan kampus. Dibuat menggunakan framework Laravel 12.

## Cara Menjalankan Project Secara Lokal

1. Clone repository ini:
   ```bash
   git clone https://github.com/luluuatl/app-perpustakaan.git
   
   cd app-perpustakaan

   composer install

   cp .env.example .env
   php artisan key:generate
   php artisan serve

   ---

## Konsep MVC (Model-View-Controller)

- **Model:** Mengelola logika data, aturan bisnis, dan interaksi langsung dengan database.
- **View:** Bertanggung jawab menampilkan antarmuka/tampilan (HTML) yang dilihat oleh pengguna.
- **Controller:** Bertindak sebagai jembatan yang menerima request pengguna, memproses data melalui Model, lalu mengembalikannya ke View.
