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

## Useful Commnads
- Create a controller
```
php artisan make:controller --help           // Return the help menu of the make controller command
php artisan make:controller WelcomeController      // Create a controller name WelComeController
```

- Create migration
```
php artisan make:migration create_students_table     // Create word specify to create a table and table name is students
php artisan migrate                                  // Run the migration file and create the table in database
```

## Visual Studio Code Extensions Used

- Laravel Blade Snippet = To autocomplete the snippets
- Laravel Blade Spacer - To add the space in curly brackets {{  }}
- PHP Intelephense - To auto add the use statements and code completion
- Laravel goto View - Easily move to any view pressing CTRL + Right Click
- Laravel goto Controller - Easily move to any controller pressing CTRL + Right Click
- Laravel Snippets - Autocomplete laravel code
- PHP Namespace Resolver - Import classes

### Templating Types

Blade provides two layout method to reusing code to build  layouts

- Template Inheritance - Used @section('content') to define a content inside the file and @yield('content') inside the base file
- Blade Components

### Important Points

- .env file contains the configuration of the files. These values can be access by the classes inside the config directory.
- **config()** helper method is used to grab the values from .env file like config('app.name'). Here **app** is the class name of config/app.php file and **name** is the key of this value **'name' => env('APP_NAME', 'Laravel')** 