<?php

/*
Без htaccess цього не зробити
1) Беремо урл і щось з ним робимо
*/
function currentPage(string $path) : string
{
    $routes = ['login', '/', '/about', '/home', '/post', '/registration', '/contact'];

    foreach ($routes as $rout) {
        if($rout === $path) {
            if($path === '/') {
                return '/home';
            } else {
                return  $rout;
            }
        }
    }
    header('HTTP/1.0 404 Not Found');
    return "This route has not created!";
}
