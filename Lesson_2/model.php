<?php
//
// Список всех статей
//
function articles_all()
{
	// Запрос.
	$query = "SELECT * FROM articles ORDER BY dt_article DESC";
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
    $dt_article = date('Y-m-j G:i:s');
    
	$t = "INSERT INTO articles (title, content, dt_article) VALUES ('%s', '%s', '%s')";
	
	$query = sprintf($t, 
	                 mysql_real_escape_string($title),
	                 mysql_real_escape_string($content),
                     $dt_article);
	
	$result = mysql_query($query);
							
	if (!$result)
		die('Не удалось добавить статью' . mysql_error());
		
	return true;
}

//
// Изменить статью
//
function articles_edit($id_article, $title, $content) {
    
	//Подготовка
    $title = trim($title);
    $content = trim($content);
    
    $id_article = (int)$id_article;
    
    //Проверка
    if (($title == '') || ($content == '')) {
        return false;
        die();        
    }
    
    if (!is_int($id_article)) {
        return false;
        die;
    }
    
        
    //Экранируем html-теги
    $title = htmlspecialchars($title);
    $content = htmlspecialchars($content);
    
    //Формируем запрос
    $t = "UPDATE articles SET title = '%s', content = '%s' WHERE id_article = '$id_article'";
    
    $query = sprintf($t,
                    mysql_real_escape_string($title),
                    mysql_real_escape_string($content));
    
    $result = mysql_query($query);
        
    if (!$result) {
        die('Не удалось обновить статью с id =' . $id_article . mysql_error());
    }
    
    return true;
    
}

//
// Удалить статью
//
function articles_delete($id_article) {
	//Подготовка:
    $id_article = (int)$id_article;
    
    //Если $id_article не число - редиректим на editor.php
    if (!is_int($id_article)) {
        header('editor.php');
        die();
    }
    
    //Формируем запрос
    $t = "DELETE FROM articles WHERE id_article = '%d'";
    
   $query = sprintf($t, $id_article);
    
    //Выполняем запрос    
    $result = mysql_query($query);
    
    if (!$result) {
        die('Не удалось удалить статью ' . $id_article . ' ' . mysql_error());
    }
    
    
    return true;
}

//
// Короткое описание статьи
//
function articles_intro($article)
{
    // $article - это ассоциативный массив, представляющий статью
    if (mb_strlen($article['content']) > 500) {
        $article['content'] = mb_substr($article['content'], 0, 500) . '...';
        return $article;
    }
     else {
        return $article;    
     }
}
