<?php

use App\Core\App;

const ROOT_PATH = __DIR__. "/../";
include ROOT_PATH . 'vendor/autoload.php';

$app  = new App();
$app->run();
