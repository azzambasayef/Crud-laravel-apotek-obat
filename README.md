#  Sistem CRUD Data Obat Apotek (Laravel 12)

Project ini merupakan aplikasi sederhana berbasis web yang dibuat menggunakan Laravel 12 untuk mengelola data obat di apotek.

Project ini dibuat sebagai tugas mata kuliah Pemrograman Web 2 di semester 4 dari prodi Sistem Informasi Universitas Malikussaleh.

---

## 📌 Deskripsi

Aplikasi ini digunakan untuk melakukan pengelolaan data obat seperti:

* menambahkan data obat
* melihat daftar obat
* mengedit data obat
* menghapus data obat

Tujuan dari project ini adalah untuk memahami konsep CRUD (Create, Read, Update, Delete) menggunakan Laravel.

---

## ⚙️ Teknologi yang Digunakan

* PHP 8.2
* Laravel 12
* MySQL (XAMPP)
* Bootstrap 5

---

## 🧩 Fitur

* Tambah data obat
* Tampilkan data obat
* Edit data obat
* Hapus data obat
* Validasi form sederhana

---

## 🗂️ Struktur Database

Tabel utama yang digunakan adalah **obats**, dengan field:

* id
* nama_obat
* kategori
* harga
* stok
* tanggal_kadaluarsa
* created_at
* updated_at

---

## 🚀 Cara Menjalankan Project

1. Clone repository

```bash
git clone https://github.com/azzambasayef/Crud-laravel-apotek-obat.git
cd Crud-laravel-apotek-obat
```

2. Install dependency

```bash
composer install
npm install
```

3. Copy file environment

```bash
cp .env.example .env
```

4. Atur database di file `.env`

```env
DB_DATABASE=apotek_crud
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key

```bash
php artisan key:generate
```

6. Jalankan migration

```bash
php artisan migrate
```

7. Jalankan server

```bash
php artisan serve
```

8. Buka di browser

```
http://127.0.0.1:8000
```

---

## 🧠 Konsep CRUD

* Create → menambahkan data obat
* Read → menampilkan data obat
* Update → mengubah data obat
* Delete → menghapus data obat

---

## 👨‍💻 Author

Azzam Shamil Basayef
Sistem Informasi
Kota Binjai, Sumatera Utara

---

## 📌 Catatan

Project ini masih sederhana dan tidak menggunakan fitur login. Fokus utama hanya pada implementasi CRUD dasar menggunakan Laravel.
