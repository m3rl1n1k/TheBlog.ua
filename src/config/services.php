<?php


use App\Command\DropTableCommand;
use App\Command\HelpCommand;
use App\Command\TableCreateCommand;
use App\Controller\AboutController;
use App\Controller\HomeController;
use App\Core\Command\Command;
use App\Core\Command\CommandConverter;
use App\Core\ExceptionListener;
use App\Core\FileLoader;
use App\Model\UserModel;
use App\Table\User;

return [
    HomeController::class => function () {
        return new HomeController();
    },
    AboutController::class => function () {
        return new AboutController;
    },
    UserModel::class => function () {
        return new UserModel();
    },
    FileLoader::class => function () {
        return new FileLoader();
    },
    ExceptionListener::class => function () {
        return new ExceptionListener();
    },
    Command::class => function ($container) {
        return new Command(
            $container->get(CommandConverter::class),
        );
    },
    CommandConverter::class => function () {
        return new CommandConverter();
    },
    TableCreateCommand::class => function () {
        return new TableCreateCommand();
    },
    DropTableCommand::class => function () {
        return new DropTableCommand();
    }
    ,
    HelpCommand::class => function () {
        return new HelpCommand();
    },
    User::class => function () {
        return new User();
    }
];