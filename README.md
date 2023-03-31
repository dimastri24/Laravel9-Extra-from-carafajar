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
