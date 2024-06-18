<?php

//Константи
define("ABSOLUTPATH", $_SERVER['DOCUMENT_ROOT']);

// Дод файли
include_once ('route.php');

$page = currentPage($_SERVER['REQUEST_URI']);
// Підключення частин верстки
include('templates/partials/header.php');
include ('templates/pages' . "$page".'.php');
include ('templates/partials/footer.php');
