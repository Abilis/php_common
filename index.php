<?php

//error_reporting(0);

require 'functions.php';

session_start();

$enter_site = false;

//Когда пользователь попадает на сайт index.php, авторизация сбрасывается
//logout();
//теперь этого не надо

//надо поискать пользователя в сессии, а если в сессии не нашлось - в куках.
//Если в контексте сессии не установлено имя пользователя, пытаемся взять его из куков
if(!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKEI['username'];
}

//Еще раз ищем пользователя в контексте сессии
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
}

//Ищем, где был пользователь в последний раз. Если находим - перенаправляем туда

//сначала ищем в сессии
if (isset($_SESSION['page'])) {
    header("Location: " . $_SESSION['page']);
    exit();
}

//если не нашли в сессии, ищем в куках
if (isset($_COOKIE['page'])) {
    header("Location: " . $_COOKIE['page']);
    exit();
}

//Если массив $_POST не пуст, тогда обрабатываем отправку формы

if (count($_POST) > 0) {
    if (!isset($_POST['remember'])) { //борьба с надоедливым нотисом
        $_POST['remember'] = 0;
    }
    $enter_site = login($_POST['username'], $_POST['remember']);
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