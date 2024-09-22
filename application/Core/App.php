<?php

namespace App\Core;


class App
{

    public function __construct()
    {
        $file = new FilePreloader();
        $file->preload();
    }


    public function run(): void
    {
        @set_exception_handler([new ExceptionListener(), 'handler']);

        new DatabaseManager();
        $services = Config::getValue('services');
        Container::getInstance($services);

        Route::dispatch();

    }

}