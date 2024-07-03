<?php
session_start();
include_once ('../helpers/validators.php');

if (isset($_POST)) {

    $result_of_validation = verificationOfFields($_POST);

    if (empty($result_of_validation['error'])) {

        if (isset($result_of_validation['email']) && isset($result_of_validation['password']) && isset($result_of_validation['name'])) {
            registerUser($dbh, $result_of_validation); //не знаю на скільки це логічно з $dbh
        } else {
            /*
            1) Виклик метода checkUserExists, перевіряємо через запит до бази чи є в таблиці такі дані
            2) Якщо є стартуємо сесію та вписуємо ці дані в неї зі спец ключем юзер
            */
            loginUser($dbh, $result_of_validation);
            header("location: ../");
            exit();
        }
    } else {
        echo $result_of_validation['error'];
    }
}








/*

Метод bindParam
Переваги:

Прив'язка за посиланням: Це означає, що значення прив'язується на момент виконання запиту, що може бути корисним, якщо значення змінюється після підготовки запиту, але перед його виконанням.
Більш чіткий контроль: Ви маєте більше контролю над кожним параметром і його типом.
Безпечніший у деяких випадках: Якщо у вас складні запити або ви маєте справу зі змінними, які змінюються, bindParam може бути надійнішим.
Недоліки:

Додатковий код: Необхідно більше коду для прив'язки кожного параметра окремо.
Складність: Для новачків це може бути складніше зрозуміти і використовувати правильно.



Метод execute з масивом параметрів
Переваги:

Простота: Легше використовувати, менше коду.
Зручність: Всі параметри передаються одним масивом, що зручно для простих запитів.
Недоліки:

Типи даних: Можуть виникати проблеми з типами даних, особливо якщо ви не впевнені, що всі значення мають правильний тип.
Менше контролю: Менше контролю над кожним параметром окремо, що може призвести до помилок, якщо типи даних не збігаються.
*/