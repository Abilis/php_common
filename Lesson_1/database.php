<?php
//Определение констант подключения к БД

define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'lesson1');

//Языковая настрока
setlocale(LC_ALL, 'utf8');
date_default_timezone_set('Europe/Samara');

//Подключение к БД
mysql_connect(SERVER, USERNAME, PASSWORD) or die('No connect with DB');
mysql_query('SET NAMES utf8');
mysql_select_db(DB_NAME) or die('No DB');

//Заодно запускаем сессию
session_start();
?>