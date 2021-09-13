<p align="center"><a href="https://jetstream.laravel.comm" target="_blank"><img src="https://raw.githubusercontent.com/laravel/jetstream/2.x/art/logo.svg" alt="Logo Laravel Jetstream"></a></p>
<p align="center">
    <a href="https://github.com/laravel/jetstream/actions">
        <img src="https://github.com/laravel/jetstream/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/jetstream">
        <img src="https://img.shields.io/packagist/dt/laravel/jetstream" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/jetstream">
        <img src="https://img.shields.io/packagist/v/laravel/jetstream" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/jetstream">
        <img src="https://img.shields.io/packagist/l/laravel/jetstream" alt="License">
    </a>
</p>


## About laravel-jetstream-inertia-master

This Project is for developers who want to kickstart project in Laravel 8 and InertiaJS with Vue 3. I have created this project to start with basic admin panel features like user management with Roles. 

![](https://raw.githubusercontent.com/jackdanielzzzz/laravel-jetstream-inertia-master/master/screenshot.png)

## Installation

Download or clone the repo locally:

```sh
git clone https://github.com/jackdanielzzzz/laravel-jetstream-inertia-master.git
cd laravel-jetstream-inertia-master
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm install
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Configure database in .env
```sh
DB_DATABASE=laravel
```

Run database migrations:

```sh
php artisan migrate
```

Run the dev server (http://localhost:8000):

```sh
php artisan serve
```

## Optional browsersync

Add browsersync:

```sh
npm i browsersync
```

Add in webpack.mix.js:

```sh
mix.browserSync({
    proxy: '127.0.0.1:8000'
});
```

Configure browsersync port in .env

```sh
APP_URL=http://127.0.0.1:8000
```

After starting dev server (http://localhost:3000):

```sh
npm run watch
```

## First Start

`1. register new user` : There is no user by default. Please register first to use the admin panel.

`2. add new role` : Create a role after logging in.

`3. change role` : Change the empty role for the newly created user.


## Optional Profile Photo

Configure features in config/jetstream.php:

```sh
'features' => [
        // Features::termsAndPrivacyPolicy(),
        Features::profilePhotos(),
        // Features::api(),
        // Features::teams(['invitations' => true]),
        Features::accountDeletion(),
    ],
```

