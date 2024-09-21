<?php

namespace App\Core;


class App
{

    public function __construct()
    {
        @set_exception_handler([new ExceptionListener(), 'handler']);
    }


    public function run(): void
    {
        // todo: logic for run app
        // todo: call Container class
        Route::dispatch();
    }

}