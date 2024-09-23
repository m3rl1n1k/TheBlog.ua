<?php

namespace App\Core;

use App\Core\Exceptions\ModeNotFoundException;
use Throwable;

class ExceptionListener
{
    private null|string|array|false $mode;

    public function __construct()
    {
        $this->mode = Config::getValue('config.mode');
    }

    /**
     * @throws ModeNotFoundException
     */
    public function handler(Throwable $e): void
    {

        $msg = match ($this->mode) {
            'dev' => $e->getMessage() . " " . $e->getFile() . " " . $e->getLine() . "\n",
            'prod' => $e->getMessage() . "\n",
            default => throw new ModeNotFoundException('Mode not found' . " $this->mode"),
        };
        echo $msg;
    }
}