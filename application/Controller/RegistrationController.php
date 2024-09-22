<?php

namespace App\Controller;

use App\Core\AbstractController;
use App\Core\View;

class RegistrationController extends AbstractController
{
    public function register(): View
    {
        return $this->render('pages/registration');
    }
}