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

### Membuat UUID sebagai Primary Key

-   `DB_DATABASE=laravel_uuid`
-   migrate terus seed

-   Simple aja, create table but instead of `$table->id()` kita pake `$table->uuid()->primary()` kalau pake migration.
-   Selanjutnya di model Student kita bikin function getIncrementing() return false dan function getKeyType() return 'string'.
-   Nanti pas insert data tinggal id = Str::uuid(). Str::uuid ini helper dari laravel utk generate 36bit uuid. Kalau mau custom sendiri ya bisa tinggal bikin helper sendiri beres.
-   Pemanggilan berdasarkan id tetep sama baik itu eloquent atau query builder, bisa pakai find / findOr / findOrFail. Ini aku gk tau apa krn dia primary atau nama column nya 'id'.
