# PRD – MiseEdu Hub

## 1. Project Overview

MiseEdu Hub adalah platform edukasi digital yang berfungsi sebagai pusat informasi pembelajaran, pengembangan diri, serta peluang akademik dan karier bagi mahasiswa dan pelajar Indonesia. Platform ini menyediakan akses terhadap artikel edukatif, program pelatihan, webinar, informasi beasiswa, peluang magang, kompetisi, dan berbagai kegiatan pengembangan kompetensi.

Tujuan utama sistem adalah menyediakan sumber informasi yang terpusat, mudah diakses, responsif pada berbagai perangkat, serta membantu pengguna meningkatkan kemampuan akademik maupun profesional.

---

## 2. User Personas

### Mahasiswa

* Mencari artikel edukatif dan pengembangan diri.
* Mengakses informasi program pelatihan dan webinar.
* Menemukan peluang beasiswa, magang, dan kompetisi.

### Pelajar

* Membaca artikel pembelajaran dan motivasi.
* Mengikuti program pengembangan keterampilan.
* Mengetahui berbagai peluang pendidikan.

### Fresh Graduate

* Mencari informasi karier dan pengembangan profesional.
* Mengakses program pelatihan dan workshop.
* Menemukan peluang kerja dan magang.

---

## 3. Core Features

### Beranda

Pengguna dapat melihat informasi utama platform, pengenalan MiseEdu Hub, serta akses cepat ke seluruh fitur yang tersedia.

### Artikel

Pengguna dapat membaca artikel mengenai pendidikan, produktivitas, pengembangan diri, dan persiapan karier.

### Program

Pengguna dapat melihat berbagai program pelatihan, webinar, workshop, dan kegiatan pengembangan kompetensi.

### Peluang

Pengguna dapat mengakses informasi mengenai beasiswa, magang, kompetisi, volunteer, dan peluang pengembangan lainnya.

### Tentang Kami

Pengguna dapat mengetahui profil, visi, dan misi MiseEdu Hub.

### Halaman Kontak

Pengguna dapat memperoleh informasi kontak dan mengirimkan pertanyaan melalui formulir kontak.

---

## 4. Tech Stack

### Backend

* Laravel 12

### Frontend

* Blade Template Engine
* CSS

### Database

* SQLite

### Dashboard Admin

Dashboard admin dapat dikembangkan untuk mengelola artikel, program, peluang, dan pesan pengguna.

### Version Control

* Git
* GitHub

---

## 5. Data Models dan Relasi

### User

* Mengelola konten platform

### Article

* Menyimpan artikel edukasi

### Program

* Menyimpan data program pelatihan dan webinar

### Opportunity

* Menyimpan data beasiswa, magang, kompetisi, dan volunteer

### ContactMessage

* Menyimpan pesan dari formulir kontak

---

## 6. User Flows

### Membaca Artikel

Beranda → Menu Artikel → Pilih Artikel → Baca Artikel

### Mengakses Program

Beranda → Menu Program → Pilih Program → Lihat Detail Program

### Mencari Peluang

Beranda → Menu Peluang → Pilih Peluang → Lihat Detail Informasi

### Menghubungi Admin

Beranda → Menu Kontak → Isi Formulir → Kirim Pesan

---

## 7. Out of Scope

* Sistem pembayaran online
* Forum diskusi pengguna
* Fitur chat real-time
* Mobile application native (Android/iOS)
* Integrasi Learning Management System (LMS)