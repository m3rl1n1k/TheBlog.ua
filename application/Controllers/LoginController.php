<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\View;

class LoginController extends AbstractController
{
    public function login(): View
    {
        return $this->render('pages/login');
    }

}