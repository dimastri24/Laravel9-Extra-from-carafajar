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

### Laravel-Breeze

-   DB_DATABASE=laravel_breeze
-   [Documentasi starter kit Breeze](https://laravel.com/docs/9.x/starter-kits#laravel-breeze)
-   Saat install ntar ditanya". Pilih buat stack apa? kali ini kita buat blade. Mau dark mode gk? yes. Mau pake Pest test atau PHPUnit aja? yes
-   Keren bgt sih ini banyak bgt hal yg dah dibikinin sama breeze, bisa langsung di cek di route nya untuk liat apa aja. Yang terbaru skrg jadi ada profile sama update profile sekaligus delete account sendiri juga.
-   Kalo mau forgot password kyknya harus setup email server dulu.
-   Jelas krn default ya attribute user nya gitu doang tapi kalo mau di otak atik bisa kyknya, pertama pasti update migration user nya dulu sisanya ngikut, controller juga gk akan byk berubah juga kyknya misal pas update profile.
-   Disini dah disiapin juga tailwind sama vite nya jadi dah cuma tinggal update layout tampilan sama component nya.
-   Karena cuma mau pengenalan jadi gk akan ku apa"in, mungkin kedepannya butuh ya pada saat itu baru cari tau apa aja yg bisa di custom.
