<?php

use App\Core\App;

const ROOT_PATH = __DIR__. "/../";
include ROOT_PATH . 'vendor/autoload.php';
include ROOT_PATH . 'application/bootstrap.php';

(new App())->run();
