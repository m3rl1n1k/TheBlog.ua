<?php

namespace App\Classes\Controllers;

class ControllerHome 
{
    public obj $view;
    public obj $model;

    public function __construct()
    {
        //$this->view = new View();
    }

    public function index()
    {
        print_r("This is the class ControllerHome");
    }
}