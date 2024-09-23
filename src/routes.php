<?php

use App\Controller\AboutController;
use App\Controller\ContactController;
use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\PostController;
use App\Controller\RegistrationController;
use App\Core\Route;

Route::add('^$', HomeController::class, 'index');
Route::add('/', HomeController::class, 'index');
Route::add('/home', HomeController::class, 'index');

Route::add('/login', LoginController::class, 'login');
Route::add('/registration', RegistrationController::class, 'register');

Route::add('/about', AboutController::class, 'index');
Route::add('/contact', ContactController::class, 'index');
Route::add('/post', PostController::class, 'index');

