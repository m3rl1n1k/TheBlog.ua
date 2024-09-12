<?php

/*
У конфігураційному файлі ми можемо зберігати налаштування фреймворку, наприклад, ми можемо зберігати ім’я нашої програми, шлях кореня та, звичайно, параметри підключення до бази даних:
*/

//site name
define('SITE_NAME', 'TheBlog.ua');

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');

//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'blog');