<?php
require ('functions.php');
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
