<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

//Проверка массива $_GET. Был ли запрос на удаление статьи
if (!empty($_GET['id'])) {
    if (articles_delete($_GET['id'])) {        
    header('Location: editor.php');
    die();
 }
   
}


// Извлечение статей.
$articles = articles_all();

//Извлечение аннотаций для статей

//Обрабатываем полученный массив
$articles_intro = array(); //создаем пустой масси массив

foreach ($articles as $article) {
    $articles_intro[] = articles_intro($article); //добавляем в конец массива
    //сокращенный вариант статьи
    
}

// Кодировка.
header('Content-type: text/html; charset=utf-8');

// Вывод в шаблон.
include('theme/editor.php');