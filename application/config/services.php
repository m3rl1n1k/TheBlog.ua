<?php

use App\Controller\HomeController;
use App\Core\Config;
use App\Core\Container;
use App\Model\UserModel;

return [
    HomeController::class => function (Container $container) {
        return new HomeController(
            $container->get(UserModel::class),
            $container->get(Config::class)->getValue('database'),
        );
    },
    UserModel::class => function () {
        return new UserModel();
    },
    Config::class => function () {
        return Config::instance();
    }
];