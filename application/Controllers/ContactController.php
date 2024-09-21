<?php

namespace App\Controllers;

use App\Core\AbstractController;
use App\Core\View;

class ContactController extends AbstractController
{
    public function index(): View
    {
        return $this->render('pages/contact');
    }
}