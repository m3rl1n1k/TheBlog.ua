<?php

namespace App\Controller;


use App\Core\AbstractController;
use App\Core\View;
use App\Model\UserModel;

class HomeController extends AbstractController
{
    public function __construct(protected UserModel $userModel, protected $email)
    {
    }

    public function index(): View
    {
        dd($this->email);
        return $this->render('pages/home');
    }
}