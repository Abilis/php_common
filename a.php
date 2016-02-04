<?php

session_start();

require "functions.php";

//Запоминаем страницу в сессии
$_SESSION['page'] = 'a.php';

//Если в контексте сессии не установлено имя пользователя, пытаемся взять его из куков
if(!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKEI['username'];
}

//Еще раз ищем пользователя в контексте сессии
$username = $_SESSION['username'];

//Если так ничего и не нашлось, то выкидываем пользователя на главную
if ($username == null) {
    logout();
    header("Location: index.php");
    exit();
}

?>

<html>
<head>
    <title>Страница А</title>
</head>
    
<body>
<h2>Страница А</h2>
    <p>А и <a href = "b.php">Б<a/> сидели на трубе.</a></p>
    Вы вошли как <b><?=$username?></b>. <a href="logout.php">Выйти</a>    
</body>
</html>