<?php

/*
Без htaccess цього не зробити
1) Беремо урл і щось з ним робимо
*/
function currentPage(string $path) : string
{
    /*
        Cтворить змінну куди будемо зберігати знайдений шлях
        І для тайтла також шаблн
        Дод відкр буферизацію підключ обраний шлях в який вствав дані, та закрив буферінг і повертаємо дані з буфера
        подумати як бути з підключеннями до різних файлів в папках, потрібна константа загального шляху
    */
    $realPath = '';
    $currentContent = '';
    $currentHeader = '';

    $routes = ['/', '/about', '/home', '/post', '/registration', '/contact', '/login', '/logout', '/404'];

    foreach ($routes as $rout) {
        if($rout === $path) {
            if($path === '/') {
                $realPath = '/home';
            } else {
                $realPath =  $rout;
            }
        }
    }
    if (!empty($realPath) && $realPath !== '/404') {
        $currentHeader = include('templates/pages/titles/title'.str_replace('/', '_', $realPath).'.php');
        $currentContent = include("templates/pages$realPath.php");
        extract(['title' => $currentHeader, 'content' => $currentContent]);

    }

    if ($realPath == '/404') {
        header('HTTP/1.0 404 Not Found');// чи потрібен тут такий заголовок? це ж вже при обробці заголовків в класі Reguest ми його оброблюємо
        $currentContent = include("templates/pages$realPath.php");
        extract(['title' => '', 'content' => $currentContent]);
        // return "This route has not created!";
    }

    ob_start();
    include ('templates/partials/base_view.php');;
    return ob_get_clean();
}
