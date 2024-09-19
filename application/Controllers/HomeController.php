<?php

namespace App\Controllers;

use App\Classes\Controllers\obj;

class HomeController
{
    public function __construct()
    {
    }

    public function index(): void
    {
        print_r("This is the class HomeController");
    }
}