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
	<a href="index.php">Главная</a> |
	<a href="editor.php">Консоль редактора</a>
	<hr/>
	<ul>

		
                
                <?=$article_current['id_article']?> <br />
                <b><?=$article_current['title']?></b><br />
                <p><?=$article_current['content']?></p>
                <br /> <br />
        
                
        
        
        
        
	</ul>
	<hr/>
	<small><a href="http://prog-school.ru">Школа Программирования</a> &copy;</small>			
</body>
</html>