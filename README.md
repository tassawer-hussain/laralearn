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

## Purpose

This repository serves as a record of my Laravel learning journey, providing a reference for my future use and offering resources that others may find beneficial.

### Setup

I have already installed PHP and MySQL using XAMPP and Composer globally on my Windows system.

### Installation Steps

- Create a folder named laravel inside the XAMPP htdocs directory. The directory path is D:\XAMPP8\htdocs\laravel.
- Open the command prompt within the laravel folder.
- Run the following commands in sequence:

```
composer global require laravel/installer
laravel new APP-NAME
cd APP-Name
php artisan serve
```

### Installation Steps explanation.
- **Install Laravel Installer Package Globally**
    - This command installs the Laravel installer globally on your system.
- **Create a New Laravel Application:**
    - Replace APP-NAME with your desired application name (e.g., laralearn).
    - During the setup, I used the following options:
        - Would you like to install a starter kit?                                            --> none
        - Which testing framework do you prefer?                                              --> PHPUnit
        - Would you like to initialize a Git repository?                                      --> yes
        - Which database will your application use?                                           --> mysql
        - Default database updated. Would you like to run the default database migrations?    --> yes
- **Move to the Newly Created Folder:**
    - Navigate to the folder where your Laravel application code is hosted.
- **Run the Server**
    - This command runs the development server to serve the Laravel application.

## Visual Studio Code Extensions Used

- Laravel Blade Snippet = To autocomplete the snippets
- Laravel Blade Spacer - TO add the space in curly brackets {{  }}

### 

Blade provides two layout method to reusing code to build  layouts

- Template Inheritance - Used @section('content') to define a content inside the file and @yield('content') inside the base file
- Blade Components