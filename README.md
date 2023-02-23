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

### Laravel Spatie

-   Spatie Permission: Multiple Roles Persmission & Middleware.
-   Dokumentasi nya ada disini [Spatie: Laravel Permission](https://spatie.be/docs/laravel-permission/v5/introduction).
-   Instalasi nya diikuti aja sampe beres.
    -   composer require
    -   publish vendor (copy file config & migration)
    -   clear cache
    -   migrate
    -   use HasRoles di model User
-   Spatie ini membantu kita dalam membuat role dan permission kepada user. Secara konsep sama kyk yg lain, akan dibikinin beberapa table dan pivot table untuk store role dan permission milik user, lalu akan ada middleware yg akan membatasi hak akses user tergantung role dan atau permission nya.
-   Table yang dibikinin ada roles, permissions, model_has_roles, model_has_permissions, role_has_permissions.
-   Inser data ke table manually, sebenarnya kalo mau pake seeder juga bisa dan lebih cepet mungkin biar beres bikinnya.

```
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'tony', 'tony@email.com', NULL, '$2y$10$GIm.Rya7cjacqEZDyF25tuLkw36eDMp7tqqB4g9lsRQ0LhYWUbZk2', NULL, NULL, NULL), (NULL, 'andy', 'andy@email.com', NULL, '$2y$10$GIm.Rya7cjacqEZDyF25tuLkw36eDMp7tqqB4g9lsRQ0LhYWUbZk2', NULL, NULL, NULL), (NULL, 'ben', 'ben@email.com', NULL, '$2y$10$GIm.Rya7cjacqEZDyF25tuLkw36eDMp7tqqB4g9lsRQ0LhYWUbZk2', NULL, NULL, NULL);
```

```
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (NULL, 'author', 'web', NULL, NULL), (NULL, 'editor', 'web', NULL, NULL), (NULL, 'moderator', 'web', NULL, NULL);
```

```
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES (NULL, 'create article', 'web', NULL, NULL), (NULL, 'edit article', 'web', NULL, NULL), (NULL, 'delete article', 'web', NULL, NULL);
```

-   Kita assignment manual juga untuk role permission dan user, biar cepet langsung bikin function di route.
-   Pendekatan penggunaan role dan permission ada dua umumnya. Pertama user has role has permission. Kedua user has permission. Ini tergantung kebutuhan aplikasi. Paling enak atau best practicenya yang ke pertama. Sebenernya ada yg ketiga jadi cuma user has role tapi tidak dianjurkan.
-   Cara batasi akses dgn middleware default atau package, caranya liat langsung ke route tambahan pergi ke dokumentasi nya.
