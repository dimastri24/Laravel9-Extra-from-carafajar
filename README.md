## Welcome to Laravel - extra

Repo ini kita akan bahas tips, trick dan fitur atau apapun yg berkaitan dengan laravel. Contentnya berasal dari playlist [Tips, Trick & Fitur Laravel](https://www.youtube.com/playlist?list=PLnrs9DcLyeJTWHAVN0ZhzsnuqSzTS_tp1). Bentuk dari repo ini akan menjadi branch" pada setiap pembahasan. Beberapa akan ada yang gk ada disini itu berarti masuk ke commit repo lain, karena yg disini hanya yg butuh bikin contoh project baru.

Bisa aja content belajar dari playlist lain akan ku taruh sini juga.

## How to run

-   clone or unzip downloaded project
-   check-out to intended branch and read the note / guide on each md branch
-   set up the env
-   create the database
-   do migration and seeder if any

## Branch Content include commit detail

### Master / Main / Init / Default / Starter

-   Ini branch starter untuk memulai branch baru lainnya. Jadi disini ngak ada apa" ya cuma akan ada update di md ini doang

### Laravel Events

-   DB_DATABASE=laravel_accessors-mutators
-   Events itu adalah cara untuk melakukan sesuatu saat suatu activitas sedang atau sudah terjadi.
-   Ada beberapa default events yg bisa kita pakai, bisa diliat aja langsung di dokumentasi nya [Events](https://laravel.com/docs/9.x/eloquent#events). Yang akhiran -ing itu saat terjadi, yg -ed setelah terjadi. Bedanya yg sudah terjadi akan rollback semua jika event yg dia listen itu gagal contohnya gagal di UserController nih jadi gk akan kebikin juga log nya.
-   Kita bisa bikin closure di dalem booted function dalam model utk register event yg akan di eksekusi.
-   Dengan pakai event kodingan kita jadi lebih bersih krn kita gk nulis log di user controller.
-   Ini masih basic Event nya. Jika Event nya makin besar kita akan belajar Observer dan Event Listeners

### Laravel Observers

-   DB_DATABASE=laravel_accessors-mutators
-   Dengan Observer level kodingan kita naik ketingkat lebih lanjut lagi krn semakin clean dan terstruktur.
-   Kita sdh gk nulis event di model lagi, melainkan di file terpisah, kita hanya perlu register oberver nya di EventServiceProvider.

### Laravel Event Listener

-   DB_DATABASE=laravel_accessors-mutators
-   Disini kita mau pakai Event Listener, jadi utk yg sblmnya Observer nya kita commented biar gk ke run dua kali.
-   Event Listener berguna jika ingin melakukan berbagai post execution setelah suatu satu event. Contohnya saat user being created kita mau nge log ke db serta ngirim email ke user nya.
-   Pertama kita buat Event nya utk nangkep event apa yg dilakukan. Kedua, kita bikin Listener yg akan di eksekusi setelah mendengar event tadi.
-   Agar laravel mengenal event listener kita ada dua cara, dgn Auto Discover atau manually register. Disini kita mau coba dgn auto discover ya jadi di event service provider kita jadiin true dicovery nya. Manual nya liat aja langsung ke dokumentasi nya di [Event Listener](https://laravel.com/docs/9.x/events).
-   Terakhir kita dispatch event listener ini di controller yg mau dipanggil.
