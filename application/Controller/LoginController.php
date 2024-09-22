<?php

namespace App\Controller;

use App\Core\AbstractController;
use App\Core\View;

class LoginController extends AbstractController
{
    public function login(): View
    {
        $homeController = new HomeController(
            new PostModel(), 'email'
        );
        $homeController->index();
        return $this->render('pages/login');
    }

}