<?php 

require_once('startup.php');
require_once("model.php");

//установка параметров, подключение к базе данных и запуск сессии
startup();

//Проверка массива $_GET
if (empty($_GET)) {
    header('Location: index.php');
    die();
}

//Если же в $_GET передан $id_article, нужно ее вывести

//Запрос конкретной статьи
$article_current = articles_get($_GET['id']);

//вывод в шаблон
include('theme/article.php');

?>