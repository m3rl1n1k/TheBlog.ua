<?php
use App\Config;
use App\Core\Route; // Без namespace, autoload не зможе знайти клас. Альтирнатива App\Core\Route::start();
use App\Classes\Controllers\ControllerHome;
require_once '../vendor/autoload.php';

$urlUser = trim($_SERVER['REQUEST_URI'], '/');
dump($urlUser);
Route::add('^$', ['controller' => 'Home', 'action' => 'index']);
Route::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

//dump( Route::getRouters());
 //Route::matchRoute($urlUser);

 Route::dispatch($urlUser);
