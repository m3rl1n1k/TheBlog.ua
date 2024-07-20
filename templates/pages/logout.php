<?php
// Подумати де повинен виконуватися код, виходу з сесії та кукі
// Та Пероадресації на гловну сторінку

session_start();

if (isset($_SESSION['auth_user'])) {
    echo 'logout';
    $_SESSION['auth_user'] = NULL;
    session_destroy();
    header('Location: /');
    die();
} else {
    header('Location: /');
    die();
}