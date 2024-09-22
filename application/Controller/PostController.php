<?php

namespace App\Controller;

use App\Core\AbstractController;
use App\Core\View;

class PostController extends AbstractController
{
    public function index(): View
    {
        $homeController = new HomeController(
            new PostModel(), 'email'
        );
        $homeController->index();
        return $this->render('pages/post');
    }
}