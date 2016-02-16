<?php
include_once('startup.php');
include_once('model.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

// Обработка отправки формы.
if (!empty($_POST)) {
	if (articles_new($_POST['title'], $_POST['content'])) {
		header('Location: editor.php');
		die();
	}
	
	$title = $_POST['title'];
	$content = $_POST['content'];
}
else
{
	$title = '';
	$content = '';
}

// Кодировка.
header('Content-type: text/html; charset=utf-8');

// Вывод в шаблон.
include('theme/new.php');
