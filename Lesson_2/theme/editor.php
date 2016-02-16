<?/*
Шаблон редактируемой страницы
=======================
$articles - список статей

статья:
id_article - идентификатор
title - заголвок
content - текст
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>PHP. Уровень 2</title>
	<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" /> 
</head>
<body>
	<h1>PHP. Уровень 2</h1>
	<br/>
	<a href="index.php">Главная</a> |
	<b>Консоль редактора</b>
	<hr/>
	<ul>
		<li>
			<b><a href="new.php">Новая статья</a></b>
		</li>
        <br />
		<?php foreach ($articles_intro as $article_intro): ?>
			<li>
				<i>Добавлено: <?=$article_intro['dt_article']?></i> <br />
                <a href="edit.php?id=<?=$article_intro['id_article']?>">
					<?=$article_intro['title']?></a> <small><a href="editor.php?id=<?=$article_intro['id_article']?>"><удалить></a></small>
				
                <br />
                <?=$article_intro['content']?> <br /><br />
			</li>
		<?php endforeach ?>
	</ul>
	<hr/>
	<small><a href="http://php.net/manual/ru/">PHP</a> &copy;</small>			
</body>
</html>
