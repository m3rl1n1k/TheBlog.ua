<?php

namespace App\Core;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class App
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function run(): void
    {
        $this->runFileLoader();
        $this->runContainer();
        $listener = Container::getService(ExceptionListener::class);
        @set_exception_handler([$listener, 'handler']);
        new DatabaseManager();
        Route::dispatch();
    }

    private function runFileLoader(): void
    {
        $loader = new FileLoader();
        $loader->setPath(ROOT_PATH . 'src/config');
        $loader->load();
    }

    private function runContainer(): void
    {
        $services = Config::getValue('services');
        Container::getInstance($services);
    }
}