<?/*
Шаблон редактируемой страницы
=======================
$articles - список статей

статья:
id_article - идентификатор
title - заголвок
content - текст
*/?>

<?php
//var_dump($articles);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>PHP. Уровень 2</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="theme/style.css" /> 
</head>
<body>
	<h1>PHP. Уровень 2</h1>
	<br/>
	<b>Главная</b> |
	<a href="editor.php">Консоль редактора</a>
	<hr/>
	<ul>

		<?php foreach ($articles_intro as $article_intro): ?>
                
                <i>Добавлено: <?=$article_intro['dt_article']?></i> <br />
                <b><a href="article.php?id=<?=$article_intro['id_article']?>"><?=$article_intro['title']?></a></b>
        <br /> <br />
                <?=$article_intro['content']?>
                    <a href="article.php?id=<?=$article_intro['id_article']?>">Читать далее...</a>
        <br /> <br /> <br /> <br />
        
                
        <?php endforeach ?>
        
        
        
	</ul>
	<hr/>
	<small><a href="http://php.net/manual/ru/">PHP</a> &copy;</small>			
</body>
</html>