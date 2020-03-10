# Bussines-Center
* Dibuat dengan PHP 7.2.9
* Boostrap v4.4.1
* web browser XAMPP
* Version 1.0
* developed by me

# Decsription
Business Center adalah sebuah Lembaga yang bergerak dibidang Penjualan Jasa pada bidang Teknologi Informasi. Jasa yang dijual adalah IT Support, Programmer dan masih banyak lagi. 

# Pemesanan Jasa
Setiap kali Bagian Penjualan akan Menjual Jasa ia selalu Menerima Pemesanan berupa Surat Pesan dari Divisi lain yang membututuhkan.

# Features
- [x] CRUD data Jasa
- [x] CRUD data Divisi
- [x] Entry Data Pesanan
- [x] Cetak Nota
- [ ] Login Page

# Installation
> 1. Install web Server
> 2. Taruh folder project pada folder htdocs / tempat untuk menjalankannya didalam web server
> 3. create database dengan nama bc_app [ambil file .sql di dalam folder project)
> 4. Buka folder app lalu folder-> Config->lalu buka file config.php->ubah BASEURL dengan url localhost punya anda contoh-> *'http://loclahost/bussines-center/public'*
> 5. Masih Didalam file Config.php ubah configurasi database pada bagian setelah BASEURL sesuai dengan database yang telah dibuat
> 6. Buka folder public lalu cari folder js buka divisi.js dan jasa.js ubah action pada method didalammnya sesuai sama BASEURL anda contoh *http://localhost/bussines-center/public/divisi/ubah*
