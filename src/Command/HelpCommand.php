<?php

namespace App\Command;

use App\Core\Command\Interface\CommandInterface;
use App\Core\Config;

class HelpCommand implements CommandInterface
{
    const ANSI_RESET = "\e[0m";
    const ANSI_RED = "\e[31m";
    const ANSI_GREEN = "\e[32m";
    const ANSI_YELLOW = "\e[33m";
    const ANSI_BLUE = "\e[34m";

    private array $commands;

    public function __construct()
    {
        $this->commands = Config::getValue('commands');
    }

    public function execute(): void
    {
        echo self::ANSI_RESET;
        array_walk($this->commands, function ($command, $key) {
            $des = $command['description'] ?? " ";
            print(self::ANSI_GREEN . "{$key}: " . self::ANSI_YELLOW . $des . "\n");
            array_walk($command, function ($command, $key) {
                if (is_array($command)) {
                    $des = $command['description'] ?? " ";
                    print("- " . self::ANSI_GREEN . "{$key}:" . self::ANSI_YELLOW . " $des\n");
                }
            });
        });
        echo self::ANSI_RESET;
    }
}