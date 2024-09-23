<?php

namespace App\Controller;

use src\Core\AbstractController;
use src\Core\View;

class RegistrationController extends AbstractController
{
    public function register(): View
    {
        return $this->render('pages/registration');
    }
}