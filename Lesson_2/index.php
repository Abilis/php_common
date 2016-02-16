<?php 

require_once('startup.php');
require_once("model.php");

//установка параметров, подключение к базе данных и запуск сессии
startup();

//извлечение аннотаций для статей
$articles = articles_all(); //сначала достаем полные статьи

//Обрабатываем полученный массив
$articles_intro = array(); //создаем пустой масси массив

foreach ($articles as $article) {
    $articles_intro[] = articles_intro($article); //добавляем в конец массива
    //сокращенный вариант статьи
}

// Кодировка.
header('Content-type: text/html; charset=utf-8');

//выводим в шаблон
include('theme/index.php');

?>