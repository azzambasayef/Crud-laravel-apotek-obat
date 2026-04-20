#  Sistem CRUD Data Obat Apotek (Laravel 12)

Project ini merupakan aplikasi web sederhana berbasis **Laravel 12** yang digunakan untuk mengelola data obat di apotek dengan konsep **CRUD (Create, Read, Update, Delete)**.

Project ini dibuat sebagai tugas mata kuliah Pemrograman Web 2 pada semester 4, prodi Sistem Informasi, Universitas Malikussaleh.

---

## 📌 Deskripsi

Aplikasi ini dibuat sebagai tugas mata kuliah **Pemrograman Web** dengan tujuan untuk memahami implementasi CRUD menggunakan framework Laravel.

Melalui aplikasi ini, pengguna dapat:

* Menambahkan data obat
* Melihat daftar obat
* Mengedit data obat
* Menghapus data obat

---

## ⚙️ Teknologi yang Digunakan

* PHP 8.2
* Laravel 12
* MySQL (XAMPP)
* Bootstrap 5
* Blade Template

---

## 🧩 Fitur Utama

* ✅ Create: Tambah data obat
* ✅ Read: Menampilkan daftar obat
* ✅ Update: Edit data obat
* ✅ Delete: Hapus data obat
* ✅ Validasi input form
* ✅ Tampilan modern menggunakan Bootstrap

---

## 🗂️ Struktur Database

Tabel utama: **obats**

| Field              | Tipe Data | Keterangan     |
| ------------------ | --------- | -------------- |
| id                 | bigint    | Primary Key    |
| nama_obat          | varchar   | Nama obat      |
| kategori           | varchar   | Jenis obat     |
| harga              | integer   | Harga obat     |
| stok               | integer   | Jumlah stok    |
| tanggal_kadaluarsa | date      | Expired date   |
| created_at         | timestamp | Waktu dibuat   |
| updated_at         | timestamp | Waktu diupdate |

---

## 🚀 Cara Instalasi & Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/azzambasayef/Crud-laravel-apotek-obat.git
cd Crud-laravel-apotek-obat
```

---

### 2. Install Dependency

```bash
composer install
npm install
```

---

### 3. Setup Environment

Copy file `.env`:

```bash
cp .env.example .env
```

Lalu sesuaikan konfigurasi database:

```env
DB_DATABASE=apotek_crud
DB_USERNAME=root
DB_PASSWORD=
```

---

### 4. Generate Key

```bash
php artisan key:generate
```

---

### 5. Jalankan Migration

```bash
php artisan migrate
```

---

### 6. Jalankan Server

```bash
php artisan serve
```

Buka di browser:

```
http://127.0.0.1:8000
```

---

## 🧠 Konsep CRUD yang Diimplementasikan

* **Create** → Menambahkan data obat melalui form input
* **Read** → Menampilkan data obat dalam bentuk tabel
* **Update** → Mengubah data obat yang sudah ada
* **Delete** → Menghapus data obat dari database

---

## 📁 Struktur Folder Penting

```
app/
 ├── Models/Obat.php
 ├── Http/Controllers/ObatController.php

database/
 ├── migrations/

resources/
 ├── views/
 │   ├── layout.blade.php
 │   └── obat/
 │       ├── index.blade.php
 │       ├── create.blade.php
 │       └── edit.blade.php

routes/
 └── web.php
```

---

## 👨‍💻 Author

**Nama:** Azzam Shamil Basayef
**Asal:** Kota Binjai, Sumatera Utara
**Program Studi:** Sistem Informasi

---

## 🎯 Tujuan Project

Project ini dibuat untuk:

* Memahami konsep CRUD dalam Laravel
* Mengimplementasikan MVC (Model-View-Controller)
* Melatih penggunaan database MySQL dengan Laravel

---

## 📌 Catatan

* Project ini tidak menggunakan fitur login/authentication
* Fokus utama adalah implementasi CRUD dasar
* Cocok untuk pembelajaran pemula

---

## ⭐ Penutup

Project ini merupakan implementasi sederhana namun lengkap dari konsep CRUD menggunakan Laravel. 
