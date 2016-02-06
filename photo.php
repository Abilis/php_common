<?php
require_once('functions.php');
require_once('database.php');

database_connect(); //Подключение к БД

if (isset($_GET['id'])) {
    $arr_photo = photo_from_db($_GET['id']); //вытаскиваем из БД путь к полной картинке по id

}
else {
    header ('Location: index.php');
    exit();
}

//Если в БД нет фотографии с запрошенным id
if ($arr_photo['0'] == false) {
    header ('Location: index.php');
    exit();
}


//Если же есть - вытаскиваем нулевой элемент массива. Это тоже будет массив для нужной нам фотографии
$arr_photo = $arr_photo['0'];

//увеличиваем число просмотров на 1
add_ratio('1', $_GET['id']);

?>

<html>
<head>
    
</head>
<body>
<a href="index.php">Вернуться в галерею</a>
<br />
<br />
    
<img src=<?=$arr_photo['path_full']?> >


    
<br />
Просмотров: <?=$arr_photo['ratio']?>
    
</body>
</html>