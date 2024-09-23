<?php

namespace App\Core\Command;

use App\Core\Command\Interface\CommandInterface;
use App\Core\Container;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class Command
{
    public function __construct(protected CommandConverter $commandConverter)
    {
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function run($argument): void
    {
        $command = $this->commandConverter->converter($argument);
        /** @var CommandInterface $command */
        $command = Container::getService($command['class']);
        $command->execute();
    }
}