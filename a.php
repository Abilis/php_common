<?php
error_reporting(0);

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
    logout(); //и уничтожаем сессию
    header("Location: index.php");
    exit();
}

//Обработка формы

//Первом делом берем из сессии, если она существует
if (isset($_SESSION['yes'])) {
 $yes = $_SESSION['yes'];
}

//Обработка нажатия кнопки
if ($_POST['123']) {
    if ($_POST['yes']) {
        $yes = 'checked';
        $_SESSION['yes'] = 'checked';
    }
    else {
        $yes = '';
        $_SESSION['yes'] = '';
    }
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
    
    <form action="" method="post">
        <p>У вас есть любимые числа?</p>
        <input type="checkbox" name="yes" <?=$yes?> />Да!
        
        <br />
        <button type="submit" name="123" value="123">Запомнить выбор</button>
    </form>
</body>
</html>