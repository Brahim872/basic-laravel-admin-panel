<h1 align="center">Basic Laravel Admin Panel</h1>
<h3 align="center">A basic and simple admin panel for Laravel projects.</h3>
<p align="center">
<a href="https://packagist.org/packages/balajidharma/basic-laravel-admin-panel"><img src="https://poser.pugx.org/balajidharma/basic-laravel-admin-panel/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/balajidharma/basic-laravel-admin-panel"><img src="https://poser.pugx.org/balajidharma/basic-laravel-admin-panel/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/balajidharma/basic-laravel-admin-panel"><img src="https://poser.pugx.org/balajidharma/basic-laravel-admin-panel/license" alt="License"></a>
</p>

## Built with
- [Laravel 9](https://github.com/laravel/framework)
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- [Laravel Breeze](https://github.com/laravel/breeze)
- [Tailwind CSS](https://tailwindcss.com/)

## Installation
- To get started, you need to install [Docker Desktop](https://www.docker.com/products/docker-desktop).
- You may run the following command in your terminal
- Windows open WSL2 Linux terminal. [Docker Desktop WSL 2 backend](https://docs.docker.com/desktop/windows/wsl/)
- `docker run --rm -v "$(pwd)":/opt -w /opt laravelsail/php81-composer:latest bash -c "composer create-project balajidharma/basic-laravel-admin-panel admin-app && cd admin-app && php artisan sail:install --with=mysql,redis,meilisearch,mailhog,selenium"`
- `cd admin-app`
- `./vendor/bin/sail pull mysql redis meilisearch mailhog selenium`
- `./vendor/bin/sail build`
- `./vendor/bin/sail up`
- `./vendor/bin/sail npm install`
- `./vendor/bin/sail npm run dev`
- `./vendor/bin/sail artisan migrate --seed --seeder=BasicAdminPermissionSeeder`
- Now open http://localhost/

###### Super Admin Login
- Email - superadmin@example.com
- Password - password

## Also Try
- [Build a Laravel admin panel from scratch](https://blog.devgenius.io/laravel-create-an-admin-panel-from-scratch-part-1-installation-8c11dae7e684)
- [Laravel Vue Admin Panel](https://github.com/balajidharma/laravel-vue-admin-panel)

## Screenshots
<p align="center">
	<img src="https://user-images.githubusercontent.com/6037466/179876455-1fbe6c89-9afc-4002-879b-fe3fc6506e34.png" >
	<br/><br/>
	<img src="https://raw.githubusercontent.com/Brahim872/basic-laravel-admin-panel/1.x/public/Capture%20d%E2%80%99%C3%A9cran%202022-12-06%20104403.png" >
	<br/><br/>
</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
