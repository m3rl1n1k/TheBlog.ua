<?php

namespace App\Controllers;


use App\Core\AbstractController;
use App\Core\View;
use App\Model\UserModel;

class HomeController extends AbstractController
{
    public function __construct()
    {
    }

    public function index(): View
    {
        $email = 'email@email.com';
        $userName = UserModel::query()->select('name')->where('email', '=', $email)->first();
        return $this->render('pages/home', ['userName' => $userName]);
    }
}