<?php

function database_connect() {
    
    //Настройки подключения к БД
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'gal';
    
    //Языковая настройка
    setlocale(LC_ALL, 'ru_RU.CP1251');
    
    //Подключение к БД
    mysql_connect($hostname, $username, $password) or die('No connection with DB');
    mysql_query('SET NAMES cp1251');
    mysql_select_db($dbName) or die('No DB');
    
    //Открытие сессии
    session_start();
  //  $_SESSION['username'] = 'Гость';
}
?>