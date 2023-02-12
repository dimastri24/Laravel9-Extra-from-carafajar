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

### Laravel Logging

-   DB_DATABASE=laravel_logging
-   Bikin table manual aja yg gampang

```
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
```

```
INSERT INTO `students` (`id`, `name`, `nis`, `address`) VALUES (NULL, 'Andi', '10010101', 'Rumah si Andi'), (NULL, 'Tono', '10010102', 'Rumah si Tono'), (NULL, 'Siti', '10010103', 'Rumah si Siti'), (NULL, 'Joko', '10010104', 'Rumah si Joko'), (NULL, 'Maria', '10010105', 'Rumah si Maria');
```

-   Ternyata selama ini kalo ada error ya kecatet langsung di log file nya.
-   Default tipe logging nya itu stack, tapi aku mau pake yg daily aja.
-   Channel nya apa aja bisa diliat di [dokumentasi logging](https://laravel.com/docs/9.x/logging).
-   Kalau mau deep dive kyknya ini tergantung practice tim atau perusahaan masing" sih ya jadi ikutan mereka aja settingan nya.
-   Oh iya, setting nya di file .env, jeroan configurasi nya di config/logging.php
-   File log nya ada di storage/logs .
