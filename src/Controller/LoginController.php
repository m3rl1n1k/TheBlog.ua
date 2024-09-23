<?php

namespace App\Controller;

use src\Core\AbstractController;
use src\Core\View;

class LoginController extends AbstractController
{
    public function login(): View
    {
        return $this->render('pages/login');
    }

}