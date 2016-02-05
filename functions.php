<?php


//Функция вывода формы отправки файла
function print_form() {
    echo '<form method="post" enctype="multipart/form-data">';
    echo '<input type="file" name="file">';
    echo '<br />';
    echo '<input type="submit" value="Загрузить файл" />';
    echo '</form>';
}

//Функция вывода превьюшек
function upload_file($file) {

        echo '<a href=index.php>Загрузить файл</a>';
        echo '<br /><br />';
        
        if ($file['name'] == '') {
            echo 'Файл не выбран!<br /> <br />';
            return;
        }
            
        if ($file['size'] > '900000') {
            echo 'Файл не может быть размером больше 900 Кб!<br /> <br />';
            return;
        }
    
        if (($file['type'] != 'image/png') && ($file['type'] != 'image/jpeg') && ($file['type'] != 'image/gif')) {
            echo 'Можно загрузить только .gif, .jpeg или .png!<br /> <br />';
            echo '<br />';
            return;
        }
    
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
        
        
        if(copy($file['tmp_name'], './img/' . $file['name'])) {             
//            echo 'Файл успешно загружен!<br /> <br />';
            copy($file['tmp_name'], './img_small/' . $file['name']);
            $pathfile = './img_small/' . $file['name'];
            resize($pathfile, 300); // Делаем ресайз            
        }
        else {
            
        }
    
    //Перенаправляемся на главную, чтобы нельзя было спамить через F5
    $_SESSION['upload-file-sucsess'] = 'sucsess';
    header("Location: index.php");
    
        
}


//Функция для получения списка картинок
function list_files($dir) {
$handle = opendir($dir);
    
if ($handle != false) {
    while (($file = readdir($handle)) !== false) {
         $files[] = $file;
    }
}

return $files;
}



//Функция создания превьюшек
/*
  $w_o и h_o - ширина и высота выходного изображения
  */
  function resize($image, $w_o = false, $h_o = false) {
    if (($w_o < 0) || ($h_o < 0)) {
      echo "Некорректные входные параметры";
      return false;
    }
      
    list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
    $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
      
    if ($ext) {
      $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
        
      $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
    }
      else {
      echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
      return false;
    }
      
    /* Если указать только 1 параметр, то второй подстроится пропорционально */
    if (!$h_o) $h_o = $w_o / ($w_i / $h_i);
    if (!$w_o) $w_o = $h_o / ($h_i / $w_i);
      
    $img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
    imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i); // Переносим изображение из исходного в выходное, масштабируя его
      
    $func = 'image'.$ext; // Получаем функцию для сохранения результата
    return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
  }


?>