<?php

$db_host= 'localhost';
$dbname = 'blog';
$db_user = 'root';
$db_password = '';

try {
    $dbh = new PDO("mysql:host=$db_host;dbname=$dbname;", $db_user, $db_password, array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Встановлює режим вибірки даних на асоціативний масив
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" // Встановлює кодування символів на UTF-8
    ));

    return $dbh;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
