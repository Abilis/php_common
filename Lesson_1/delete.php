<?php
require_once('database.php');

//Если ничего не передано в $_GET['id_article'], значит, ничего удалять не надо
if (!isset($_GET['id_article'])) {
    header('Location: index.php');
    exit();
}

//Формируем запрос

$id_article = $_GET['id_article'];
$sql = "DELETE FROM articles WHERE id_article = $id_article";

//Выполняем запрос
$result = mysql_query($sql);

if (!$result) {
    die('Невозможно удалить статью с таким идентификатором!' . mysql_error());
}

else {
    echo 'Статей удалено: ' . mysql_affected_rows();
}

//Закрываем соединение с БД
mysql_close();
    
    
    
?>