<?php
declare(strict_types=1);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//if (!isset($_SESSION['auth_user'])) {
//    session_start();
//    echo "session_start";
//    var_dump($_SESSION['auth_user']);
//} else {
//    echo "session_end";
//}

//Константи
define("ABSOLUTPATH", $_SERVER['DOCUMENT_ROOT']);

// Дод файли
include_once ('route.php');
include_once ('config/db_connection.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/helpers/validators.php');


// Підключення шаблону
$page = currentPage($_SERVER['REQUEST_URI']);
//var_dump($page);
echo $page;
// код для обробки статуса
//if ($page == 'This route has not created!') {
////    $ch = curl_init($_SERVER['REQUEST_URI']);// Ініціалізація cURL, створення о'єкта object(CurlHandle)#1
////    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);// Отримання коду стану відповіді
////    $page = $http_code = 404 ? include ('templates/pages/404.php') : $page;
//
//    include('templates/pages/404.php');
//} else {
//    // Підключення частин верстки
//    include('templates/partials/header.php');
//    include ('templates/pages' . "$page".'.php');
//    include ('templates/partials/footer.php');
//}
// код для обробки статуса //

// Альтернативне підключення шаблонів
//$layout = file_get_contents('templates/partials/base_view.php');
//$content = file_get_contents('templates/pages' . $page . '.php');
//$layout = str_replace('{{ content }}', $content, $layout);
//
//echo $layout;