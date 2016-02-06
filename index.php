<?php
error_reporting( E_ERROR );

require_once('functions.php');
require_once('database.php');

database_connect(); //Подключение к БД

//Вывод сообщение о успешной загрузке после редиректа
if($_SESSION['upload-file-sucsess'] == 'sucsess') {
        echo 'Файл успешно загружен!<br /> <br />';
        unset($_SESSION['upload-file-sucsess']);
    }
?>

<html>

<head>
    <title>Галерея фотографий</title>
</head>

<body>
<h1>Галерея фотографий</h1>    
    
<?php
    
if (isset($_FILES['file'])) {
    upload_file($_FILES['file']);      
  }  
else {
    print_form();
    } 

/* Теперь реализация генерации превьюшек галереи будет сделана через БД. Сортировка будет по рейтингу

//Получаем список файлов в каталоге $dir    
$dir_small = './img_small/';
$dir = './img/';
$files = list_files($dir_small);

//Проходим по полученному массиву и гененируем по именам ссылки для картинок
$n = count($files);

for ($i = 2; $i < $n; $i++) {
    $temp_img = $dir_small . $files[$i]; ?>
    <a href="<?=$dir . $files[$i]?>"><img src="<?=$dir_small . $files[$i]?>"></a>
    <?php echo ''; 
}
*/    
    

//запускаем функцию, которая вытаскивает данные картинок из БД
$arr_photos = photos_from_db();



    
foreach ($arr_photos as $photo) {?>
    
    <a href="photo.php?id=<?=$photo['id_photo']?>"><img src="<?=$photo['path_small']?>" /></a>
    
<?php }
    
?>

</body>
</html>