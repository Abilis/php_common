<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Обработка отправки формы.
if (!empty($_POST)) {
    if (articles_edit($_POST['id_article'], $_POST['title'], $_POST['content'])) {
        header('Location: editor.php');
        die();
    }
    
}
else
{
	//Если попадаем методом $_GET, то заполнить форму запрошенной статьей
    $article_current = articles_get($_GET['id']);
    
    $title_current = $article_current['title'];
    $content_current = $article_current['content'];
    
}



// Кодировка.
header('Content-type: text/html; charset=utf-8');

//Выводим в шаблон
include('theme/edit.php');
?>