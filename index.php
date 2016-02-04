<?php
if (!$_SERVER['HTTP_REFERER']) {
    $_SERVER['HTTP_REFERER'] = 'Адрес был указан вручную';
}

//Запись в файл информации о посещении страницы
$f = fopen('visits.txt', 'a+');
fputs($f, date('Y-m-d G:i:s') . "\n");
fwrite($f, $_SERVER['REMOTE_ADDR'] . "\n");
fwrite($f, $_SERVER['HTTP_REFERER'] . "\n");
fclose($f);
?>

<html>
<head>
    <title>Сайт с журналом посещаемости</title>
</head>

<body>
<h2>Это главная страница сайта</h2>

    <p>Мы <a href="visits.php">следим</a> за его посещаемостью!</p>
    
    <p>На нас ссылаются два сайта. <a href="site1.html">Раз.</a> <a href="site2.html">Два.</a></p>
</body>
</html>