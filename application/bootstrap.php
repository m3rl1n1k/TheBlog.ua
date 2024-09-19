<?php

use App\Core\Config;

Config::instance(array_merge([
    'config' => require_once ROOT_PATH . 'application/config/config.php',
]));
