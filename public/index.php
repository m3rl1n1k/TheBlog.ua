<?php

use App\Core\App;
use App\Core\Exceptions\RouteNotFoundException;

const ROOT_PATH = __DIR__. "/../";
include ROOT_PATH . 'vendor/autoload.php';
include ROOT_PATH . 'application/bootstrap.php';

try {
    (new App())->run();
} catch (RouteNotFoundException $e) {
}
