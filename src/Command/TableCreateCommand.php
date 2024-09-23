<?php

namespace App\Command;

use App\Core\Command\Interface\CommandInterface;
use App\Core\Container;
use App\Core\DatabaseManager;

class TableCreateCommand implements CommandInterface
{
    const ANSI_RESET = "\e[0m";
    const ANSI_RED = "\e[31m";
    const ANSI_GREEN = "\e[32m";

    public function execute(): void
    {
        echo self::ANSI_RESET;
        global $argv;
        new DatabaseManager();
        $result = Container::getService($argv[2])->up();
        if (!$result) {
            echo self::ANSI_GREEN . "Table created!\n";
        } else {
            echo self::ANSI_RED . "Error creating table!\n";
        }
        echo self::ANSI_RESET;
    }
}