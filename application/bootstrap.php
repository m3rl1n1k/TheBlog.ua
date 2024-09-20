<?php

use App\Core\Config;

Config::instance(array_merge([
    'config' => require_once ROOT_PATH . 'application/config/config.php',
    'services' => require_once ROOT_PATH . 'application/config/services.php',
    'routes' => require_once ROOT_PATH . 'application/config/routes.php',
]));
