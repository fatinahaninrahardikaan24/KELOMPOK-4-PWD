# PRD – IAST Institute Portal

## 1. Project Overview

IASTInstitute.com adalah portal resmi organisasi ilmiah yang berfungsi sebagai pusat informasi akademik dan penelitian. Platform ini menyediakan akses terhadap jurnal ilmiah, publikasi, berita akademik, informasi beasiswa, dana riset, katalog buku, produk akademik, serta informasi organisasi.

Tujuan utama sistem adalah menyediakan sumber informasi akademik yang terpusat, mudah diakses, responsif pada berbagai perangkat, dan mendukung kebutuhan mahasiswa, dosen, serta peneliti.

---

## 2. User Personas

### Mahasiswa (S1/S2/S3)

* Mencari jurnal dan referensi ilmiah.
* Mengakses informasi beasiswa dan penelitian.
* Membaca berita akademik terbaru.

### Dosen

* Mengakses publikasi ilmiah.
* Mencari informasi hibah dan dana penelitian.
* Mengelola kontribusi artikel atau publikasi.

### Peneliti

* Menemukan jurnal dan publikasi terkait.
* Mengakses informasi riset dan kolaborasi penelitian.
* Memanfaatkan katalog sumber akademik.

---

## 3. Core Features

### Direktori Jurnal

Pengguna dapat menelusuri daftar jurnal berdasarkan kategori, bidang ilmu, dan kata kunci.

### Publikasi & Artikel

Pengguna dapat membaca artikel, publikasi ilmiah, dan informasi akademik yang dipublikasikan organisasi.

### Berita & Pengumuman

Pengguna dapat melihat berita terbaru, agenda kegiatan, pengumuman beasiswa, dan informasi dana riset.

### Katalog Buku

Pengguna dapat menelusuri koleksi buku akademik beserta detail informasi dan tautan terkait.

### Produk Akademik

Pengguna dapat melihat daftar produk atau layanan akademik yang disediakan organisasi.

### Halaman Kontak

Pengguna dapat memperoleh informasi kontak organisasi dan mengirimkan pertanyaan melalui formulir kontak.

---

## 4. Tech Stack

### Backend

* Laravel 12

### Frontend

* Blade Template Engine
* Tailwind CSS 4

### Database

* MySQL

### Dashboard Admin

Rekomendasi menggunakan Laravel Filament karena memiliki performa cepat, mudah dikembangkan, serta terintegrasi dengan Laravel 12.

### Version Control

* Git
* GitHub

---

## 5. Data Models dan Relasi

### User

* Memiliki banyak Artikel
* Memiliki banyak Publikasi

### Journal

* Memiliki banyak Artikel

### Article

* Dimiliki oleh User
* Berelasi dengan Journal

### Scholarship

* Menyimpan informasi beasiswa

### ResearchFund

* Menyimpan informasi dana riset

### Book

* Menyimpan data katalog buku

### Product

* Menyimpan data produk akademik

### ContactMessage

* Menyimpan pesan dari formulir kontak

---

## 6. User Flows

### Akses Direktori Jurnal

Beranda → Menu Jurnal → Cari Jurnal → Lihat Detail Jurnal

### Membaca Artikel Akademik

Beranda → Menu Publikasi → Pilih Artikel → Baca Artikel

### Mencari Informasi Beasiswa

Beranda → Menu Beasiswa → Pilih Program → Lihat Detail Informasi

---

## 7. Out of Scope

* Sistem pembayaran online
* Forum diskusi pengguna
* Fitur chat real-time
* Mobile application native (Android/iOS)
* Integrasi Learning Management System (LMS)
