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

### Multiple Database Connection

-   Kali ini kita mau coba gimana caranya kalo kita ingin koneksiin laravel kita ke multiple database.
-   Contoh kasus, ceritanya bikin app baru dgn db baru ada table products dan companies, tapi atasan gk ingin bikin table companies lagi melainkan pake table companies dari db lama yg dah pernah dibuat.

```
CREATE TABLE `laravel_multiconn_dblama`.`companies` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

```
INSERT INTO `companies` (`id`, `name`) VALUES (NULL, 'PT Indonesia Jaya'), (NULL, 'CV Media Kreatif Indonesia'), (NULL, 'PT Solusi Untuk Anda'), (NULL, 'PT Jasa Serba Bisa'), (NULL, 'CV Kita Profesional');
```

```
CREATE TABLE `laravel_multiconn_dbbaru`.`products` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `company_id` INT(11) NOT NULL COMMENT 'produsen dari produk ini' , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

```
INSERT INTO `products` (`id`, `name`, `company_id`) VALUES (NULL, 'Tepung Roda Maz Ali', '1'), (NULL, 'Beras Kembar Tiga', '2');
```

-   Pertama bikin database, table sama insert data seperti diatas.
-   Titik pentingnya adalah saat kita setup environment dan configurasi nya.
-   Pergi ke config/database.php, cari bagian connection, kita copy setup yg mysql lalu ganti namanya. Setelah itu ke .env kita define connection baru utk database lama. Langkah terkahir adalah kita mention connection db lama di model table yg kita bikin yaitu Company.php . Selesai deh, segini saja sudah bisa melakukan aksi ke dua atau lebih database sekaligus

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_multiconn_dbbaru
DB_USERNAME=root
DB_PASSWORD=
DB_DATABASE2=laravel_multiconn_dblama
DB_USERNAME2=root
DB_PASSWORD2=
```

-   Pada kasus, table products memiliki foreign key id company dari table companies di table lama. Maka dari itu kita bisa aja membuat eloquent relationship pada model Product seperti biasanya.

-   Sekarang yg jadi concern adalah pada nyatanya gk akan se simple ini, akan ada byk configurasi dan persiapan lainnya agar bisa mengkoneksikan database yg berbeda.
-   Selanjutnya masalah ini harusnya di komunikasikan dgn sgt matang. Gimana kalo dbms nya beda" bahkan server nya beda. Gimana kalo relationship nya rumit ditambah join table nya. Define foreign key sebaiknya gmn krn lintas database, perlu trigger kah di db nya, gmn cara pengecekan kalo parent / child nya ada atau gk.
-   Menurut diskusi di stackoverflow, jika memiliki relationship tidak dianjurkan utk beda database walau bisa" aja diakalin.
-   Pembahasan tersebut masih diluar kemampuan ku jadi gk kebayang nyatanya gmn. Intinya laravel bisa konek ke database yg berbeda sekaligus.
