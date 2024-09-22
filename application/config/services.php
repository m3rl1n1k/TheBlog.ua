<?php

use App\Controller\HomeController;
use App\Core\Config;
use App\Model\UserModel;

return [
    HomeController::class => function () {
        return new HomeController();
    },
    UserModel::class => function () {
        return new UserModel();
    },
    Config::class => function () {
        return Config::instance();
    }
];