<?php

namespace App\Core;


class Route
{
    public function __construct()
    {
        require_once ROOT_PATH . 'application/config/routes.php';
    }
    public static array $routes = [];

    public static function add($path, $controller, $action): void
    {
        self::$routes[$path] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    private function call(string $controller, string $action, array $args): void
    {
        $controller = new $controller;
        call_user_func_array([$controller, $action], $args);

    }

    /**
     */
    public static function dispatch(): void
    {
        $routeClass = new Route();
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
        $routeClass->call($controller, $action, $arguments);
    }
}
