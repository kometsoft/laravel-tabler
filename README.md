# Laravel Tabler

## Requirements 
- php 8.0

## Installations

#### Install npm dependencies

After a fresh laravel installation, run;

```
composer require kometsoft/laravel-tabler
```

#### Run install command

```
php artisan tabler:install
```

#### Add this vite blade directive to your layout

```
<head>
    ...
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/tabler/app.js'])
</head>
```
