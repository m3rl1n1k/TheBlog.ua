<?php

namespace App\Core;

class Route {
    
    public static array $route = [];
    public static array $routes = [];

    public static function add($path, $route = []): void
    {
        self::$routes[$path] = $route;
    }

    public static function getRouters(): array 
    {
        return self::$routes;
    }

    public static function matchRoute(string $url): bool 
    {
        /*
            4910
        */
        foreach(self::$routes as $pattern => $value) {
            if(preg_match("#$pattern#i", $url, $matches)) {
                dump($matches);
                foreach($matches as $k => $a) {
                    if(is_string($k)) {
                        $route[$k] = $a;
                    }
                }

                if (!isset($route['controller'])) {
                    $route['controller'] = 'Home';
                }

                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }

                self::$route = $route;
                return true;
            }

        }
        return false;
    }
    
    public static function dispatch(string $url)
    {
        //Силки пишуться через дефіс?
        if (self::matchRoute($url)) {

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
            $controller = new class404();
            $controller->$action();

        }
    }
}
