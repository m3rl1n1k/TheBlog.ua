<?php
/*
1) Пост написати, може лише зареєстрований користувач інакше просимо зареєструватися
    - створити зв'язок в бд оидн до багатьох +
2) Є обмеження до напису тексту, в бд і в валідаційній функції по розміру
3) На головній сторінці повинні виводитися пости користувача(можливий і перехід на окремий блог)
*/
session_start();
include_once ('../helpers/validators.php');
if (!isset($_SESSION['auth_user'])){
    echo "please log in first";
}

if (isset($_POST)){

    $valid_fields = verificationOfFields($_POST);

    if (!empty($valid_fields)) {
        $res = writePost($dbh, $valid_fields, $_SESSION['auth_user']['id_user']);
    }
}