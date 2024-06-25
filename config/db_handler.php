<?php
include_once ('../helpers/validators.php');
echo "<br>";
print_r($_POST);
echo "</br>";

$result_of_validation = verificationOfFields($_POST);

if (empty($result_of_validation)) {
    echo "Реєстрація успішна!";
}

//die("Користувач з таким ім'ям або email вже існує.");

//echo "Реєстрація успішна!";
echo "<br>";
print_r($result_of_validation);
echo "</br>";
