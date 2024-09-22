<?php

namespace App\Core;

use Illuminate\Database\Capsule\Manager;

class DatabaseManager
{
    public function __construct()
    {
        $this->manager();
    }

    private function manager(): void
    {
        $manager = new Manager();
        $manager->addConnection(Config::getValue('database.connection'));
        $manager->setAsGlobal();
        $manager->bootEloquent();
    }
}