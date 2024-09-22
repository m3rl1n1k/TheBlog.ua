<?php

namespace App\Core;

class FilePreloader
{
    private string $path;

    public function __construct()
    {
        $this->path = ROOT_PATH . 'application/config';
    }

    public function preload(): void
    {
        // load files
        $dirs = scandir($this->path);
        foreach ($dirs as $dir) {
            if ($dir !== '.' && $dir !== '..') {
                $name = $this->makeName($dir);
                $value = yaml_parse_file($this->path . '/' . $dir);
                Config::setValue($name, $value);
            }
        }
    }

    private function makeName(string $dir): string
    {
        return explode('.', $dir)[0];
    }
}