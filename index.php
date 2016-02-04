<?php

//error_reporting(0);

require 'functions.php';

session_start();

$enter_site = false;

//Когда пользователь попадает на сайт index.php, авторизация сбрасывается
logout();

//Если массив $_POST не пуст, тогда обрабатываем отправку формы

//var_dump($_POST['remember']);

if (count($_POST) > 0) {
    $enter_site = login($_POST['username'], $_POST['remember'] == 'on');
}

//Переадресуем авторизованного пользователя на закрытую страницу сайта
if ($enter_site) {
    header("Location: a.php");
    exit();
}


?>

<html>
<head>
    <title>Вход на сайт</title>
<body>
    <h2>Войти на сайт</h2>
    <form action="" method="post">
        Введите имя:
        <br>
        <input type="text" name="username" />
        <br>
        <input type="checkbox" name="remember" />Запомнить меня
        <br>
        <input type="submit" value="Войти" />
        
    
    </form>
    </body>
</head>
</html>