	<br/>
	<a href="index.php">Главная</a> |
	<a href="editor.php">Консоль редактора</a>
	<hr/>
	<h1>Редактирование статьи</h1>
        <form action="edit.php" method="post">
            Название:
		<br/>
        <input type="hidden" name="id_article" value="<?=$article_current['id_article']?>" />
            <input type="hidden" name="dt_article" value="<?=$article_current['dt_article']?>" />
		<label><i>Добавлено: <?=$article_current['dt_article']?></i></label>
		<br/>
		<input type="text" name="title" value="<?=$article_current['title']?>" />
		<br/>
		<br/>
		Содержание:
		<br/>
		<textarea name="content"><?=$article_current['content']?></textarea>
		<br/>
		<input type="submit" value="Отредактировать" />
        </form>