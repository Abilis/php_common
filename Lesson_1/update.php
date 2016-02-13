<?php
require_once('database.php');

//Если ничего не передано в $_GET['id_article'], значит, ничего изменять не надо
if (!isset($_GET['id_article'])) {
    header('Location: index.php');
    exit();
}

//Формируем запрос

$id_article = $_GET['id_article'];
$sql = "UPDATE articles SET title = 'Измененный заголовок', content = 'Измененное содержимое статьи' WHERE id_article = $id_article";

//Выполняем запрос
$result = mysql_query($sql);

if (!$result) {
    die('Невозможно модифицировать статью с таким идентификатором!' . mysql_error());
}

else {
    echo 'Статей модифицировано: ' . mysql_affected_rows();
}

//Закрываем соединение с БД
mysql_close();    
    
    
?>