# Aplikasi Manajemen Buku Perpustakaan

UTS Pemrograman Web III - Universitas Sriwijaya
Nama: Khairudin Putra Nadillah
NIM: 09010582529121

## Fitur
- Authentication (login dan logout)
- CRUD data buku (tambah, lihat, detail, ubah, hapus)
- Relasi Category hasMany Book dan Book belongsTo Category
- Bonus: pencarian judul atau penulis dan filter kategori

## Cara Menjalankan
1. composer install
2. Salin .env.example menjadi .env, lalu atur koneksi database MySQL
3. php artisan key:generate
4. php artisan migrate:fresh --seed
5. php artisan serve

## Akun Login
- Email: admin@example.com
- Password: password