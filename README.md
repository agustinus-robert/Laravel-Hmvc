## HMVC Modules

Laravel sudah disesuaikan dengan arsitektur HMVC, tinggal install

## Install

	- git clone <https://Nama Package>
	- composer update
	- composer dump-autoload

## Modular Package

- **[Nwidart](https://nwidart.com/laravel-modules/v6/introduction)**

## Catatan

- Gunakan seri PHP 8
- Cukup gunakan http://localhost/<folder_laravel> pertama kali terbuka, sesuai dengan halaman pertama yang terpasang. Bisa diubah pada routes/web.php

## CATATAN JIKA GAGAL INSTALL

- buka composer.json
- cari key beranma: require
- lalu temukan pacakage bernama: nwidart/laravel-modules
- Lalu isikan varsi package "^9.0"
- lalu composer update