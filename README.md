# tugas-milestone2-SPARTA2018
## TUGAS MILESTONE 2 SPARTA HMIF ITB 2018 - WEBSITE CUS

Proyek yang kami buat ini adalah sebuah website untuk aplikasi CUS. Website ini ditujukan untuk membentuk suatu web presence terhadap perusahaan yang kami beri bantuan yaitu CUS. Website ini bersifat statis, sehingga tujuan utama dari dibuatnya website ini tidak lain adalah mengenalkan perusahaan CUS kepada masyarakat luas dan membenarkan pandangan yang salah pada masyarakat mengenai CUS. Website ini memiliki berbagai bagian, seperti landing page, halaman about us, halaman terms of use, halaman kontak pemilik perusahaan, dan halaman yang bisa mengalihkan website ke Google Play. Selain itu, di bagian header terdapat link yang menuntun pada akun resmi perusahaan.

### Get Started

Untuk menggunakan website ini dan mengubah isinya, pengguna akan membutuhkan aplikasi Laravel. Laravel sendiri membutuhkan aplikasi lain berupa XAMPP dan Composer. Setelah Laravel sudah tersedia, maka akan dibutuhkan NPM yang bisa diunduh dengan command prompt. Selain itu, duplikasi .env file dan pembuatan kunci enkripsi dengan php artisan juga dibutuhkan untuk menjalankan program. Web yang kami buat bersifat statis, oleh karena itu web kami hanya terdiri atas front-end dalam pembuatannya. Selain itu, dalam pembuatannya, kami menggunakan Visual Studio Code untuk mengubah kode.

### PREREQUISITES

Untuk menjalankan program atau website ini menggunakan perangkat yang dimiliki oleh pengguna, pengguna membutuhkan beberapa aplikasi, seperti Laravel, PHP yang bisa didapat dengan menggunakan XAMPP, dan NPM. NPM dibutuhkan untuk menjalankan website yang didapat dari github dengan clone. PHP digunakan untuk menjalankan kode program dan mengedit kode program. Laravel digunakan sebagai framework dasar yang kami gunakan untuk membuat website. XAMPP digunakan untuk membuat sebuah server yang dapat berdiri sendiri. 

### INSTALLING

Berikut adalah langkah-langkah untuk menginstall website yang kami buat hingga pengguna dapat melakukan pengubahan terhadap website tersebut.
1. Unduh Aplikasi XAMPP
Aplikasi XAMPP dapat diperoleh di website apache friends, yaitu https://www.apachefriends.org/ . Setelah installer XAMPP diunduh dari web tersebut, jalankan installer tersebut. Disarankan untuk tidak mengubah lokasi default dari lokasi install yang diajukan oleh aplikasi.
2. Uji coba XAMPP
Setelah XAMPP berhasil di-install pada perangkat pengguna, jalankan uji coba pada XAMPP dengan menjalankan aplikasi XAMPP dan tekan tombol start pada server Apache dan MySQL. Jika aplikasi dapat berjalan dengan baik, maka PHP akan terinstall pada lokasi di dalam folder utama XAMPP.
3. Unduh dan Install aplikasi Composer
Setelah XAMPP telah ter-install dan dapat dijalankan, Composer dapat mulai di-install. Proses instalasi Composer dapat dimulai dengan cara mengunduh aplikasi instalasi Composer pada situs Composer, yaitu https://getcomposer.org . Setelah aplikasi instalasi Composer telah terunduh, jalankan aplikasi instalasi Composer dan ikuti petunjuk untuk memasang aplikasi Composer di komputer.
Saat melakukan instalasi, file php.exe akan diminta oleh aplikasi instalasi Composer. File php.exe ini dapat ditemukan pada folder aplikasi XAMPP yang telah dipasang sebelumnya. File ini dapat diakses pada direktori file /XAMPP/php/php.exe . Setelahnya, ikuti arahan yang terdapat pada aplikasi instalasi Composer hingga aplikasi Composer berhasil terpasang pada komputer.
4. Unduh Laravel
Setelah Composer terinstall, lakukan tahapan pengunduhan Laravel. Di dalam direktori htdocs yang terdapat di dalam XAMPP, buka cmd pada direktori tersebut dan ketikkan “composer create-project --prefer-dist laravel/laravel (nama proyek)”. Setelah itu, Laravel akan terinstall dalam beberapa waktu. Setelah itu, jalankan web dengan mengetik “php artisan serve” pada cmd yang sama. Setelah itu, akan muncul port pada cmd. Setelah proses ini, jangan menutup cmd. Pada web, ketikkan “localhost:(angka port)” dan jalankan. Jika sukses, maka akan muncul web dengan tulisan Laravel.
5. Clone Repository ini
Jika pengguna tidak memiliki Git Bash atau akun GitHub, maka pengunduhan dapat dilakukan dengan mengakses repositori pemilik dan mengunduhnya menjadi suatu file zip yang bisa dibuka di tempat yang baik, yaitu di dalam file htdocs. Jika pengguna memiliki Git Bash, pengunduhan dapat dilakukan dengan command ini:
git init
git clone <url>
6. Install dependencies framework laravel dengan composer
Setelah file berhasil diunduh, lakukan install Composer dengan mengetik “composer install” pada cmd di direktori file. Setelah itu, tunggulah beberapa saat hingga composer berhasil terinstall pada direktori tersebut. Sangat disarankan untuk tidak menutup panel cmd setelah Composer terinstall.
7. Install dependencies lainnya dengan NPM
Dependencies yang memerlukan NPM dapat diinstall dengan mengetikkan “npm install” pada cmd dengan direktori yang sama dengan direktori sebelumnya. NPM akan membutuhkan beberapa waktu untuk terinstall. Jika NPM sudah terinstall dengan baik, maka cmd dapat menerima perintah lain.
8. Duplikasi file .env
File .env dapat diduplikasi dengan mengetikkan perintah di command prompt. Perintah yang diketikkan pada command prompt adalah “cp .env.example .env”. Setelah itu, command prompt akan meminta perintah lain. Hal ini menandakan bahwa file .env berhasil diduplikasi.
9. Tambahkan penjagaan enkripsi pada file
Penjagaan enkripsi dilakukan dengan mengetikkan perintah “php artisan key:generate” pada Command Prompt. Setelah perintah ini diketikkan, maka perintah tidak akan memakan waktu lama untuk dijalankan. Jika perintah sudah selesai dijalankan, command prompt dapat menerima perintah lain.
10. Jalankan file
Berkas yang telah diunduh disertai dengan Laravel akan menjalankan kode program menjadi suatu situs yang bekerja dengan baik. Untuk menjalankan situs tersebut, bukalah command prompt pada berkas yang telah diunduh dan tuliskan perintah “php artisan serve” pada command prompt dan jalankan perintah tersebut. Setelah itu,  bukalah web browser dan ketikkan “localhost:(port)”. Situs dinyatakan berjalan jika situs terbuka dengan baik.
    
### RUNNING THE TEST

Pada dasarnya, tes yang terotomasi tidak dapat dilakukan. Cara untuk mengetes keberjalanan situs yang telah dibuat adalah dengan membuka situs yang telah dibuat secara manual. JIka situs yang telah dibuat sebelumnya dapat terbuka dengan baik dan tampilan situs sudah sesuai dengan harapan, maka uji jalan situs berhasil. Jika terdapat error pada keberjalanan situs, maka dapat dikatakan bahwa masih terdapat kesalahan pada pembuatan situs.

### DEPLOYMENT

Untuk men-deploy website ke server, kelompok memanfaatkan layanan Heroku sesuai dengan langkah pada

   https://appdividend.com/2018/04/17/how-to-deploy-laravel-project-on-heroku/#Deploy_Laravel_Project_On_Heroku

Prosedur ini membutuhkan Laravel, Git, serta Heroku CLI telah diinstal pada perangkat agar bisa dijalankan. Proyek yang ada akan
diinisialisasi dalam repository Git dan  pengguna harus log in terlebih dahulu dalam Heroku. 

Website yang telah berhasil di deploy dapat diakses melalui link berikut

       http://peaceful-dusk-28494.herokuapp.com/landing

### BUILT WITH

1. Laravel 5.8 - Web Framework, PHP-based
2. Composer - PHP dependency manager
3. Npm - Other dependency manager
4. SCSS - CSS Compiler
5. HTML


### CONTRIBUTING

Pada dasarnya, kami terbuka pada kontribusi lain yang berasal dari luar kelompok kami. Selain itu, pengguna yang ingin berkontribusi pada pengembangan situs ini dapat mulai dengan belajar terlebih dahulu mengenai pengembangan situs. Selain itu, sangat disarankan bagi pengguna yang ingin berkontribusi lebih lanjut pada situs ini untuk mengunduh XAMPP, Composer, dan Laravel yang bekerja dengan baik pada perangkat yang pengguna tersebut gunakan.

### VERSIONING

* 0.1.0 - Laravel Installed 
* 0.1.1 - installed npm and laravel dependencies
* 0.1.2.1 - Created base.scss for normalization purpose
* 0.1.2.2 - Created base templating for SCSS
* 0.1.2.3 - Created base templating for laravel blade view
* 0.2.0
    * Created main.scss, a template for web styling
    * Created module folder for storing SCSS mixins
       * _variable.scss for theme color
       * _fonts.scss for include futura font on the web
       * _buttons.scss for styling all buttons
       * _elevation-shadow.scss for drop shadow mixin
       * _hamburger.scss for burger navigation icon
       * _math.scss for mathematical functions required on _mixin-fluid.scss
       * _mixin-fluid.scss for a function that uses fluid graphing for responsive web
    * Created assets folder on public for storing images
    * Created font folder on public for storing font type
        * Google Fonts: Helvetica Neue, Titillium Web
        * Local Fonts: Futura
* 0.2.1
   * Created Blocks folder on public/css folder for importing purpose and modulation
        * Landing Folder for css modulations
        * _navbar.scss for navbar styling
        * _sidebar.scss for sliding sidebar overlay menu
   * Created Component folder on public/css folder for base styling css such as customizing anchor element on html.
        * _header.scss for be imported as @include ‘component/header’
* 0.2.2
    * Edited routes/web.php
       * Changed the get route of “/” from resources/views/welcome.blade.php to “/landing”
       * Added the get route of “/landing” to view resources/views/landing.blade.php
       * Added the get route of “/about” to view resources/views/about.blade.php
       * Added the get route of “/contact” to view resources/views/contact.blade.php
       * Added the get route of “/products” to view resources/views/products.blade.php
* 0.3.0 - resources/views update
    * Created views file for web content
       * Created resources/views/about.blade.php
       * Created resources/views/contact.blade.php
       * Created resources/views/landing.blade.php
       * Created resources/views/products.blade.php
    * Created template folder for views
       * Created resources/views/template/skeleton.blade.php
* 1.0.0 - Final, Ready to deploy

### AUTHORS

Kelompok 03 - ARRAY
1. Hardy Valenthio Amansyah 
2. Hansel Grady Daniel Thamrin
3. Filbert Wijaya
4. Evan Pradanika
5. Rafael Sean Putra
6. William Fu
7. Shofura Salma
8. Putri Nadia Salsabila
9. Vincentius Lienardo
10. Fabianus Harry Setiawan
11. Dwiani Yulia Ariyanti
12. Novindra Nurrosyid Al Haqi
13. Dhafin Rayhan Ahmad
14. Marholop S.
15. Mohamad Falah Sutawindaya
16. Faris Fadhilah

### LICENSE

Proyek ini belum memiliki lisensi resmi. Proyek ini dirancang dan diselesaikan dalam rangka memenuhi tugas Tech Consultant SPARTA HMIF 2018.

### ACKNOWLEDGEMENT

- Abda Shaffan Diva - sebagai mentor kami selama penyelesaian proyek ini
- Seluruh anggota kelompok ARRAY yang telah berkontribusi pada penyelesaian tugas Milestone ini 

