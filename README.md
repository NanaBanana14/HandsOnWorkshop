# README

## Instalasi

### Prasyarat
- Pastikan PHP (>=8.1) sudah terinstal
- Instal Composer
- Instal Node.js dan npm
- Siapkan database MySQL atau PostgreSQL

### Langkah-langkah
1. Clone repositori:
   ```sh
   git clone <repository-url>
   cd <project-folder>
   ```
2. Instal dependensi:
   ```sh
   composer install
   npm install
   ```
3. Salin file environment dan atur variabel lingkungan:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. Konfigurasi pengaturan database di `.env`
5. Jalankan migrasi dan isi database:
   ```sh
   php artisan migrate --seed
   ```
6. Jalankan aplikasi:
   ```sh
   php artisan serve
   ```

## Daftar TODO

### Pengaturan Proyek
- [ ] Inisialisasi proyek Laravel 10
- [ ] Menyiapkan struktur proyek
- [ ] Konfigurasi variabel lingkungan

### Pengembangan
- [ ] Mengatur koneksi database di `.env`
- [ ] Membuat dan menjalankan migrasi tabel database
- [ ] Membuat model dan migration untuk **Skripsi**
- [ ] Membuat **SkripsiController** dengan resource controller
- [ ] Menulis validasi untuk input data skripsi
- [ ] Mengembangkan operasi CRUD dengan Eloquent ORM
- [ ] Menerapkan rute API di `routes/api.php`

### Pengujian API dengan Postman
- [ ] Menguji **GET** semua data skripsi
- [ ] Menguji **POST** menambahkan data skripsi
- [ ] Menguji **GET** satu data berdasarkan ID
- [ ] Menguji **PUT** memperbarui data skripsi
- [ ] Menguji **DELETE** menghapus data skripsi

