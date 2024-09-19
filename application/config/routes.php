<?php
namespace App\Config;

use App\Core\Route;

Route::add('^$', ['controller' => 'Home', 'action' => 'index']);
Route::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');


Route::dispatch();
