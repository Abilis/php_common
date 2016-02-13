<?php
require_once('database.php');

//Формируем запрос
$sql = "INSERT INTO articles (title, content) VALUES ('Заголовок новой статьи', 'Содержимое новой статьи')";

//Выполняем запрос
$result = mysql_query($sql);

if (!$result) {
    die('Ошибка базы данных' . mysql_error());
}

else {
    echo 'Статей добавлено: ' . mysql_affected_rows();
}

//Закрываем соединение с БД
mysql_close();
    
?>