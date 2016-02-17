<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Обработка отправки формы.
if (!empty($_POST)) {
    
    $article_current['id_article'] = $_POST['id_article'];
    $article_current['title'] = $_POST['title'];
    $article_current['content'] = $_POST['content'];
    $article_current['dt_article'] = $_POST['dt_article'];
    
    if (articles_edit($article_current['id_article'], $article_current['title'], $article_current['content'])) {
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
    $dt_current = $article_current['dt_article'];
    
}



// Кодировка.
header('Content-type: text/html; charset=utf-8');

//вывод в шаблоны
include('theme/v-header.html');
include('theme/v-edit.php');
include('theme/v-footer.html');
?>