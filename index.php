<?php
error_reporting( E_ERROR );
session_start();
require ('functions.php');

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
    
    

    

?>

</body>
</html>
