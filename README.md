# tugas-milestone2-SPARTA2018
TUGAS MILESTONE 2 SPARTA HMIF ITB 2018 - WEBSITE CUS

Proyek yang kami buat ini adalah pembuatan website CUS. Website ini ditujukan untuk membentuk suatu web presence terhadap perusahaan yang kami beri bantuan yaitu CUS. Website ini sifatnya statis, sehingga tujuan utama dari dibuatnya website ini tidak lain adalah mengenalkan perusahaan CUS kepada masyarakat luas dan membenarkan pandangan yang salah pada masyarakat mengenai CUS. Websites ini memiliki berbagai bagian, seperti landing page, halaman about us, halaman terms of use, halaman kontak pemilik perusahaan, dan halaman yang bisa mengalihkan website ke google play. Selain itu, di bagian header terdapat link yang menuntun pada akun resmi perusahaan.

Get Started

Untuk menggunakan website ini dan mengubahnya, pengguna akan membutuhkan beberapa aplikasi, seperti Laravel. Laravel sendiri membutuhkan XAMPP dan Composer. Setelah laravel terinstall, maka akan dibutuhkan npm yang bisa diinstall dengan command prompt. Selain itu, duplikasi .env file dan pembuatan kunci enkripsi dengan php artisan juga dibutuhkan untuk menjalankan program. Karena web yang kami buat bersifat statis, maka web kami hanya terdiri atas front-end dalam pembuatannya. Selain itu, dalam pembuatannya, kami menggunakan Visual Studio Code untuk mengubah kode.

PREREQUISITES

Untuk menginstall program atau website ini ke dalam perangkat yang dimiliki oleh pengguna, pengguna membutuhkan beberapa aplikasi, seperti Laravel, PHP yang bisa didapat dengan menggunakan XAMPP, dan NPM. NPM dibutuhkan untuk menjalankan website seperti ini terutama website yang seperti ini yang didapat dari github dengan clone. PHP digunakan untuk menjalankan kode program dan mengedit kode program. Laravel digunakan sebagai framework dasar yang kami gunakan untuk membuat website. XAMPP digunakan untuk membuat sebuah server yang dapat berdiri sendiri. 

INSTALLING

Berikut adalah langkah-langkah untuk menginstall website yang kami buat hingga pengguna dapat melakukan pengubahan terhadap wesite tersebut.

1.Download aplikasi XAMPP
Aplikasi XAMPP dapat diperoleh di apache friends. Setelah installer XAMPP didownload dari web tersebut, jalankan installer tersebut. Disarankan untuk tidak mengubah lokasi default dari lokasi install yang diajukan oleh aplikasi.

2.Uji coba XAMPP
Setelah XAMPP diinstall, jalankan uji coba pada XAMPP dengan menjalankan aplikasi XAMPP dan tekan tombol start pada server Apache dan MySQL. Jika aplikasi dapat berjalan dengan baik, maka PHP akan terinstall pada lokasi di dalam folder utama XAMPP.

3.Download aplikasi Composer
Untuk menginstall Composer, langkahnya masih sama dengan penginstallan XAMPP. Namun pada penginstallannya, gunakan PHP yang telah terinstall sebelumnya terinstall dengan XAMPP. Proses install akan memakan cukup banyak waktu. 

4.Download Laravel
Setelah Composer terinstall, lakukan tahapan penginstallan Larave. Di dalam direktori htdocs yang terdapat di dalam XAMPP, buka cmd pada direktori tersebut dan ketikkan “composer create-project --prefer-dist laravel/laravel (nama proyek)”. Setelah itu, Laravel akan terinstall dalam beberapa waktu. Setelah itu, jalankan web dengan mengetik “php artisan serve” pada cmd yang sama. Setelah itu, akan muncul port pada cmd. Setelah proses ini, jangan menutup cmd. Pada web, ketikkan “localhost:(angka port)” dan jalankan. Jika sukses, maka akan muncul web dengan tulisan Laravel.

5.Download folder yang terdapat pada GitHub ini
Jika pengguna memiliki Git Bash, maka git clone dengan repositori pemilik proyek ini dan file yang berisi kelengkapan website. Jika pengguna tidak memiliki Git Bash atau akun GitHub, maka penginstallan dapat dilakukan dengan mengakses repositori pemilik dan menginstallnya menjadi suatu file zip yang bisa di-unzip di tempat yang baik, yaitu di dalam file htdocs.

6.Download Composer pada direktori tempat pengguna menyimpan web ini
Setelah file berhasil didownload, lakukan install composer dengan mengetik pada cmd pada direktori file dengan mengetik "
7.Download NPM
8.Duplikasi file .env
9.Tambahkan penjagaan enkripsi pada file
10.Jalankan file

RUNNING THE TEST

Pada dasarnya, tes yang terotomasi tidak dapat dilakukan. Cara untuk mengetes website berjalan atau tidak adalah dengan menjalankan website dengan menggunakan cara yang sama 

BREAK DOWN INTO END TO END TESTS

CODING STYLE TESTS

DEPLOYMENT

BUILT WITH

CONTRIBUTING

VERSIONING

AUTHORS

LICENSE

ACKNOWLEDGEMENT
