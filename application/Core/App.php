<?php

namespace App\Core;


use App\Core\Exceptions\RouteNotFoundException;

class App
{

    public function __construct()
    {
        @set_exception_handler([new ExceptionListener(), 'handler']);
    }

    /**
     * @throws RouteNotFoundException
     */
    public function run(): void
    {
        // todo: logic for run app
        Route::dispatch();
    }

}