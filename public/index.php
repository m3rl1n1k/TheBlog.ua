<?php

use App\Core\App;

const ROOT_PATH = __DIR__ . "/../";

require_once ROOT_PATH . 'vendor/autoload.php';
require_once ROOT_PATH . 'src/bootstrap.php';

(new App())->run();
