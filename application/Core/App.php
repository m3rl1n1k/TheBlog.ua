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
        // todo: call Container class
        @set_exception_handler([new ExceptionListener(), 'handler']);

        new DatabaseManager();

        Route::dispatch();
    }

}