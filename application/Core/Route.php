<?php

namespace App\Core;

use App\Core\Exceptions\RouteNotFoundException;

class Route {
    
    public static array $route = [];
    public static array $routes = [];

    public static function add($path, $route = []): void
    {
        self::$routes[$path] = $route;
    }

//    public static function getRouters(): array
//    {
//        return self::$routes;
//    }

    private static function matchRoute(string $url): bool
    {
        /*
            4910
        */
        dump($url);
        foreach(self::$routes as $pattern => $value) {
            if(preg_match("#$pattern#i", $url, $matches)) {
                foreach($matches as $k => $a) {
                    if(is_string($k)) {
                        $route[$k] = $a;
                    }
                }

//                if (!isset($route['controller'])) {
//                    $route['controller'] = 'Home';
//                }
//
//                if (!isset($route['action'])) {
//                    $route['action'] = 'index';
//                }

                self::$route = $route;
                return true;
            }

        }
        return false;
    }

    /**
     * @throws RouteNotFoundException
     */
    public static function dispatch(): void
    {
        //Силки пишуться через дефіс?
        if (self::matchRoute(Request::url())) {

            $controller = 'App\\Classes\\Controllers\\Controller' . ucfirst(self::$route['controller']);
            $action = self::$route['action'];
  
            if(class_exists($controller)) {
                $controller = new $controller;
            } else {
                echo "Class $controller has not been!";
            }

            if(method_exists($controller, $action)) {
                $controller->$action();
            } else {
                echo "Method $action() has not been!";
            }
        } else {
            throw new RouteNotFoundException('Route not found!');

        }
    }

    public static function runRouter(): void
    {
        require_once ROOT_PATH . 'application/config/routes.php';
    }
}
