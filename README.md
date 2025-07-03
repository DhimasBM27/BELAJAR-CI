# Toko Online CodeIgniter 4

Proyek ini adalah platform toko online berbasis web yang dibangun menggunakan [CodeIgniter 4](https://codeigniter.com/). Sistem ini mendukung fungsionalitas transaksi penjualan, pengelolaan produk, diskon, kategori, serta integrasi API (webservice) untuk menampilkan data dashboard dari sisi toko.

## Daftar Isi

- [Fitur](#fitur)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Struktur Proyek](#struktur-proyek)

## ✅ Fitur

### Pengguna
- Login berdasarkan role (`admin`, `guest`)
- Halaman profil pengguna

### Produk & Kategori
- Menampilkan daftar produk
- Tambah, edit, hapus produk (admin)
- Kategori produk dengan relasi (admin)

### Diskon
- Menambahkan diskon harian
- Diskon otomatis ditampilkan jika berlaku hari ini
- Diskon disimpan dalam session dan digunakan saat checkout

### Keranjang & Transaksi
- Tambah produk ke keranjang
- Checkout dengan pengurangan harga diskon per item
- Menyimpan data transaksi dan detail transaksi ke database

### Dashboard Toko (Webservice)
- Menampilkan data transaksi via REST API (JSON)
- Menampilkan **jumlah item** yang dibeli dalam setiap transaksi
- Menggunakan `curl()` untuk akses webservice
- Proteksi API dengan header token (`key: random123678abcghi`)

### Fitur Lain
- Riwayat pembelian per user
- Export data produk ke Excel
- Validasi input & notifikasi responsif
- UI berbasis Bootstrap + NiceAdmin

## ⚙️ Persyaratan Sistem

- PHP >= 8.2
- Composer
- MySQL / MariaDB
- XAMPP atau server lokal setara

## 🚀 Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/namaproject/namarepo.git
   cd belajar-ci-tugas


## Persyaratan Sistem

- PHP >= 8.2
- Composer
- Web server (XAMPP)

## Instalasi

1. **Clone repository ini**
   ```bash
   git clone [URL repository]
   cd belajar-ci-tugas
   ```
2. **Install dependensi**
   ```bash
   composer install
   ```
3. **Konfigurasi database**

   - Start module Apache dan MySQL pada XAMPP
   - Buat database **db_ci4** di phpmyadmin.
   - copy file .env dari tutorial https://www.notion.so/april-ns/Codeigniter4-Migration-dan-Seeding-045ffe5f44904e5c88633b2deae724d2

4. **Jalankan migrasi database**
   ```bash
   php spark migrate
   ```
5. **Seeder data**
   ```bash
   php spark db:seed ProductSeeder
   ```
   ```bash
   php spark db:seed UserSeeder
   ```
6. **Jalankan server**
   ```bash
   php spark serve
   ```
7. **Akses aplikasi**
   Buka browser dan akses `http://localhost:8080` untuk melihat aplikasi.

## Struktur Proyek

Proyek menggunakan struktur MVC CodeIgniter 4:

- app/Controllers - Logika aplikasi dan penanganan request
  - AuthController.php - Autentikasi pengguna
  - ProdukController.php - Manajemen produk
  - TransaksiController.php - Proses transaksi
- app/Models - Model untuk interaksi database
  - ProductModel.php - Model produk
  - UserModel.php - Model pengguna
- app/Views - Template dan komponen UI
  - v_produk.php - Tampilan produk
  - v_keranjang.php - Halaman keranjang
- public/img - Gambar produk dan aset
- public/NiceAdmin - Template admin
