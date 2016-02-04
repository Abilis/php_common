<?php

session_start();

//Если в контексте сессии не установлено имя пользователя, пытаемся взять его из куков
if(!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKEI['username'];
}

//Еще раз ищем пользователя в контексте сессии
$username = $_SESSION['username'];

//Если так ничего и не нашлось, то выкидываем пользователя на главную
if ($username == null) {
    header("Location: index.php");
    exit();
}

?>

<html>
<head>
    <title>Страница Б</title>
</head>
    
<body>
<h2>Страница Б</h2>
    <p><a href = "a.php">А<a/> и Б сидели на трубе.</a></p>
    Вы вошли как <b><?=$username?></b>. <a href="index.php">Выйти</a>
    
</body>
</html>