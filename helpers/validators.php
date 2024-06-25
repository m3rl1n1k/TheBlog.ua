<?php
// Валідація полів
function verificationOfFields(array $fields) : array
{
    $errors = [];

    foreach ($fields as $key => $value) {
        $fields[$key] = trim(htmlspecialchars($value));

    }
        // Перевiрка на пусті поля
        if (empty($fields['name']) || empty($fields['password']) || empty($fields['email'])) {
            die("Please fill in all the required fields!");

        } else {
            if (strlen($fields['name']) < 3 || strlen($fields['name']) > 20) {
                $errors[] = "Name must be between 3 and 20 characters long.";
            }

            // Пароль не довший ніж 8 символів
            if (!(strlen($fields['password']) <= 8)) {
                $errors[] = 'Your password must be at least 8 characters long.';
            }

            // Валідність електронної пошти
            if (!filter_var($fields['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Please enter a valid email address.';
            }
        }

    return $errors;
}

