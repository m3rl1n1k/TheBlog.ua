<?php

namespace App\Controller;

use src\Core\AbstractController;
use src\Core\View;

class PostController extends AbstractController
{
    public function index(): View
    {
        return $this->render('pages/post');
    }
}