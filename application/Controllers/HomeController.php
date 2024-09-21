<?php

namespace App\Controllers;


use App\Core\AbstractController;
use App\Core\View;

class HomeController extends AbstractController
{
    public function __construct()
    {
    }

    public function index(): View
    {

        return $this->render('pages/home');
    }
}