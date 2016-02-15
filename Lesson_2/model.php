<?php
//
// Список всех статей
//
function articles_all()
{
	// Запрос.
	$query = "SELECT * FROM articles ORDER BY id_article DESC";
	$result = mysql_query($query);
							
	if (!$result)
		die(mysql_error());
	
	// Извлечение из БД.
	$n = mysql_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++)
	{
		$row = mysql_fetch_assoc($result);		
		$articles[] = $row;
	}
	
	return $articles;
}

//
// Конкретная статья
//
function articles_get($id_article)
{
	//Приводим $id_article к типу integer
    $id_article = (int)$id_article;
    
    if (!is_int($id_article)) {
        header('Location: index.php');
        die();
    }
    
    //Формируем запрос
    $sql = "SELECT * FROM articles WHERE id_article = '%d'";
    $query = sprintf($sql, $id_article);
    
    $result = mysql_query($query);
    
    if (!$result) {
        die("Не удалось получить статью и id = " .$id_article . mysql_error());
    }
    
    $article_current = mysql_fetch_assoc($result);
    return $article_current;
    
}

//
// Добавить статью
//
function articles_new($title, $content)
{
	// Подготовка.
	$title = trim($title);
	$content = trim($content);

	// Проверка.
	if (($title == '') || ($content == ''))
		return false;
	
    //экранируем html-теги
    $title = htmlspecialchars($title);
    $content = htmlspecialchars($content);
    
	// Запрос.
	$t = "INSERT INTO articles (title, content) VALUES ('%s', '%s')";
	
	$query = sprintf($t, 
	                 mysql_real_escape_string($title),
	                 mysql_real_escape_string($content));
	
	$result = mysql_query($query);
							
	if (!$result)
		die(mysql_error());
		
	return true;
}

//
// Изменить статью
//
function articles_edit($id_article, $title, $content)
{
	// TODO
}

//
// Удалить статью
//
function articles_delete($id_article)
{
	// TODO
}

//
// Короткое описание статьи
//
function articles_intro($article)
{
	 // TODO
	// $article - это ассоциативный массив, представляющий статью
    $article['content'] = mb_substr($article['content'], 0, 300) . '...';
    return $article;    
}
