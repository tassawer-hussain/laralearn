<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Installation

The purpose on this repository is to save my laravel learning curve at a point for my reuse in future and other can also get benefits from it.
I am window user and setup the laravel app using PHP and composer by global package. I had already setup xampp. So I installed in inside the htdocs folder.

### Installation Pre-requisites.

- Alread installed PHP and MySQl using Xampp
- Already installed composer

### Installation Steps.

- Created a folder named 'laravel' inside my xampp htdocs folder. Here is the dir path "D:\XAMPP8\htdocs\laravel"
- Open the command prompt within the laravel fodler.
- Run the following commands in sequence.

```
composer global require laravel/installer
laravel new APP-NAME
cd APP-Name
php artisan serve
```

### Installation Steps explanation.
- Install laravel installer package globally.
- Create new laravel app. In my case, the app name is laralearn.
    - Durin the command prompt, I used the following options.
    - Would you like to install a starter kit?                                            --> none
    - Which testing framework do you prefer?                                              --> PHPUnit
    - Would you like to initialize a Git repository?                                      --> yes
    - Which database will your application use?                                           --> mysql
    - Default database updated. Would you like to run the default database migrations?    --> yes
- Move to the newly created folder in which our laravel app code hosted.
- Run the server to serve the laravel app.


