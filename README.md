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

### Send Email with mailtrap

-   Disini kita nyoba kirim email pake 3rd party yaitu mailtrap. Email yg dikirim ini itu yg Email Testing buat development jadi untuk ngecek hasil email yg dikirim. email from dan to nya juga bsia gk asli.
-   Sign up dulu ke mailtrap terus ke Email Testing, copy configuration untuk laravel.
-   Laravel punya yg namanya Mailable, ini package utk bantu kita ngirim email. Dokumentasi nya ada disini [Mailable](https://laravel.com/docs/9.x/mail).
-   Pertama kita bisa bikin file Mailable nya.
-   Disitu ada \_\_constructor utk dptin data yg mau dikirim di dalem email.
-   Dalam Envelope kita define kyk subject, cc, bb, from, replyto, dll. Untuk from dan replyto bisa kita bikin global configuration nya di /config/mail.php .
-   Content ya isi content email nya, view: utk markup nya, tambahanya juga bisa kita taro di with: dari situ kita bisa akses data nya di markup file atau blade file yg sudah kita bikin.
-   Terakhir ada Attachement ya untk attach file di dalem email nya.
