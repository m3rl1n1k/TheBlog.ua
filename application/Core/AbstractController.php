<?php

namespace App\Core;

abstract class AbstractController
{
    public function render(string $layout, array $data = []): View
    {
        return new View($layout, $data);
    }
}