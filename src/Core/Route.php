<?php

namespace App\Core;


class Route
{
    private static array $routes = [];

    public static function add($path, $controller, $action): void
    {
        self::$routes[$path] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    /**
     */
    public static function dispatch(): void
    {
        //Силки пишуться через дефіс?
        $controller = $action = null;
        $arguments = [];
        $inputUrl = Request::url();

        foreach (self::$routes as $routeUri => $route) {

            if ($routeUri === $inputUrl) {

                $controller = $route['controller'];
                $action = $route['action'];
                break;
            }
        }
        // Викликаємо метод контролера з переданими аргументами
        self::call($controller, $action, $arguments);
    }

    private static function call(string $controller, string $action, array $args): void
    {
        $controller = Container::getInstance()->get($controller);
        call_user_func_array([$controller, $action], $args);

    }
}
