<?php

namespace App\Core;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Database\Schema\Builder;

class Table
{

    public static function create(): Builder
    {
        return Manager::schema();
    }

}