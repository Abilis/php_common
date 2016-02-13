<?php
require_once('database.php');

echo '<h2><center>Главная страница</center></h2>';

//Получаем данные из БД
$sql = "SELECT * FROM articles ORDER BY id_article DESC";

$result = mysql_query($sql);
if (!$result) {
    die('Ошибка базы данных' . mysql_error());
}

//Разбираем полученные данный и выводим

while ($row = mysql_fetch_assoc($result)) {
    echo $row['id_article'] . '<br />';
    echo $row['title'] . '<br />';
    echo $row['content'] . '<br /><hr>';
}

//Закрываем соединение с БД
mysql_close();


?>