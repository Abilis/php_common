<?php 

require_once('startup.php');
require_once("model.php");

//установка параметров, подключение к базе данных и запуск сессии
startup();

//извлечение аннотаций для статей
$articles = articles_all(); //пока полные статьи

//Обрабатываем полученный массив
$articles_intro = array(); //создаем пустой масси массив

foreach ($articles as $article) {
    $articles_intro[] = articles_intro($article); //добавляем в конец массива
    //сокращенный вариант статьи
}

//выводим в шаблон
include('theme/index.php');



?>


