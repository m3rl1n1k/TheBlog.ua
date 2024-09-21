<?php

namespace App\Config;

use App\Controllers\AboutController;
use App\Controllers\ContactController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\PostController;
use App\Controllers\RegistrationController;
use App\Core\Route;

Route::add('^$', HomeController::class, 'index');
Route::add('/', HomeController::class, 'index');
Route::add('/home', HomeController::class, 'index');

Route::add('/login', LoginController::class, 'login');
Route::add('/registration', RegistrationController::class, 'register');

Route::add('/about', AboutController::class, 'index');
Route::add('/contact', ContactController::class, 'index');
Route::add('/post', PostController::class, 'index');

