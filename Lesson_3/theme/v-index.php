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