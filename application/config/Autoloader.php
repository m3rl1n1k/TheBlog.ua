<?php
// Не використовую через відсутність гнучкості при підключені файлів з різних папок

class Autoloader 
{
    private const SRC_PATH = './application/';

    public static function register()
    {
        spl_autoload_register(function($class_name) 
        {
            $file = self::SRC_PATH . str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
            if (file_exists($file)) {
                require_once $file;
                return true;
            }
            return false;
        });
    }
}
