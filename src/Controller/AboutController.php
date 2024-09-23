<?php

namespace App\Controller;

use src\Core\AbstractController;
use src\Core\View;

class AboutController extends AbstractController
{
    public function index(): View
    {
        return $this->render('pages/about');
    }
}