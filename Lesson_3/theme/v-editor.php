<?/*
Шаблон редактируемой страницы
=======================
$articles - список статей

статья:
id_article - идентификатор
title - заголвок
content - текст
*/?>


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