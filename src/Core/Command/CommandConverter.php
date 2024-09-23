<?php

namespace App\Core\Command;

use App\Core\Config;

class CommandConverter
{
    /**
     * @var array|mixed|null
     */
    private mixed $commands;

    public function __construct()
    {
        $this->commands = Config::getValue('commands');
    }

    public function converter($command): array
    {
        $preparedCommand = $this->prepareCommand($command);
        return $this->validate($preparedCommand);
    }

    private function prepareCommand($command): array
    {
        return explode(':', $command);
    }

    private function validate($incomingCommands): array
    {
        $commandCall = "";
        foreach ($incomingCommands as $incomingCommand) {
            foreach ($this->commands as $parent => $command) {
                if ($parent === $incomingCommand) {
                    $commandCall = $command;
                    break;
                }
                if (is_array($command) && array_key_exists($incomingCommand, $command)) {
                    $commandCall = $command[$incomingCommand];
                    break;
                }
            }
        }
        return $commandCall;
    }

}