<?php
namespace App\Config;

use App\Controllers\HomeController;
use App\Core\Route;

Route::add('^$', HomeController::class, 'index');
Route::add('/home-controller', HomeController::class, 'index');

