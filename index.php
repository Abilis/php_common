<?php
echo "<meta charset = 'utf-8'>";

function show_list($news) {
    
    echo '<ul>';
    
    for ($i = 0; $i < count($news); $i++) {
        echo '<li>';
        echo '<a href="index.php?id=' . ($i + 1) . '">' . $news[$i] . '</a><br>';
        echo '</li>';
    }
    
    echo '</ul>';
}
    

function show_item($news, $id) {
    echo '<a href="index.php">Вернуться к списку новостей</a><br><br>';
    echo 'Новость №' . $id;
    echo '<br>';
    echo $news[$id - 1] . '<br><br>' ;
    echo 'Здесь много текста и картинок';
}


//Точка входа

//Создаем массив новостей

$news = array();
$news[0] = 'За качество ответят. Контролировать продукты питания начали по-
новому.';
$news[1] = 'Варшава не раскрывает перечень возможных мер против Минска';
$news[2] = 'Павел Астахов намерен добиваться отставки ряда чиновников
Удмуртии';

//Был ли передан id новости в качестве параметра?
if (isset($_GET['id'])) {
    show_item($news, $_GET['id']);
}
else {
    show_list($news);
}

?>