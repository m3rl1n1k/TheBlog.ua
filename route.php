<?php

/*
Без htaccess цього не зробити
1) Беремо урл і щось з ним робимо
*/
function currentPage(string $path) : string
{
    $routes = ['login', '/', '/about', '/home', '/post', '/registration', '/contact', '/login', '/logout', '/404'];

    foreach ($routes as $rout) {
        if($rout === $path) {
            if($path === '/') {
                return '/home';
            } else {
                return  $rout;
            }
        }
    }
    header('HTTP/1.0 404 Not Found');// чи потрібен тут такий заголовок? це ж вже при обробці заголовків в класі Reguest ми його оброблюємо
    //header("Location: /"); //Звучить більш логічніше
    return "This route has not created!";


}
