<meta charset = 'utf-8'>

<?php
//Задание 1
echo 'Задание 1. Нужно вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.<br>';

for ($i = 1; $i < 100; $i++) {
    if (($i % 3) == 0 ) {
        echo $i . ' ';
    }
}

echo '<br>';
echo '<br>';
//Задание 2
echo 'Задание 2. Нужно написать функцию для вывода числ от 0 до 10 в особом виде.<br>';

$i = 0;

do {
    if ($i == 0) {
        echo $i . ' - это нуль<br>';
        $i++;
    }
    if (($i % 2) == 0) {
        echo $i . ' - это четное число<br>';
    }
    else {
        echo $i . ' - это нечетное число<br>';
    }
    $i++;
    
} while ($i <= 10);

echo '<br>';
echo '<br>';
//Задание 3*. 
echo 'Задание 3*. Вывести с помощью цикла for числа от 0 до 9 не использую тело цикла.<br>';

$x = array(); //вспомогательный массив
$string_for_help = ''; //вспомогательная строка

for ($i = 0; $i < 10; $x[$i] = $i++) {
    
}

$string_for_help = implode(', ', $x);
echo $string_for_help;

echo '<br>';
echo '<br>';
//Задание 4. 
echo 'Задание 4. Нужно объявить массив, где в качестве ключей использованы названия областей, а в качестве значений - массивы с называниями городов из соответствующей области. Вывести на экран кое-каким хитрым образом.<br>';

$a4 = array ('Московская область' => array('Москва', 'Зеленоград', 'Клин'),
             'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
             'Рязанская область' => array('Рязань', 'Сасово', 'Рыбное', 'Тума', 'Шилово')
            );

foreach ($a4 as $index => $city) {
    echo "<h3>$index:</h3>";
    foreach ($city as $i) {
        echo $i . '<br>';
    }
}

echo '<br>';
echo '<br>';
//Задание 5*. 
echo 'Задание 5*. Повторить задание 4, но надо вывести на экран только города, начинающиеся с буквы "С".<br>';

foreach ($a4 as $index => $city) {
    echo "<h3>$index:</h3>";
    foreach ($city as $i) {
        $str5 = "$i";
       $i2 = substr($str5, 0, 2); //Вытаскиваем первый символ в названии города
        if ($i2 == 'С') {
            echo $i . '<br>';
        }
    }
}

echo '<br>';
echo '<br>';
//Задание 6. 
echo 'Задание 6. Объявить массив, индексами которого являются буквы русского языка, а значениями - соответствующие латинские буквосочетания. Затем написать функцию транслитерации строк.<br>';

/*$a6 = array('а' => array("a"),
            'б' => array("b"),
           'в' => array("v"),
           'г' => array("g"),
           'д' => array("d"),
           'е' => array("e"),
           'ё' => array("e"),
           'ж' => array("j"),
           'з' => array("z"),
           'и' => array("i"),
           'к' => array("k"),
           'л' => array("l"),
           'м' => array("m"),
           'н' => array("n"),
           'о' => array("o"),
           'п' => array("p"),
           'р' => array("r"),
           'с' => array("s"),
           'т' => array("t"),
           'у' => array("u"),
           'ф' => array("f"),
           'х' => array("h"),
           'ц' => array("c"),
           'ч' => array("ch"),
           'ш' => array("sh"),
           'щ' => array("sch"),
           'ъ' => array("'"),
           'ы' => array("y"),
           'ь' => array("'"),
           'э' => array("e"),
           'ю' => array("u"),
           'я' => array("ya"),           
           );*/

//Функция замена символа русского алфафита на группу английских
function translit($symbol) {
    
$a6 = array('а' => array("a"),
            'б' => array("b"),
           'в' => array("v"),
           'г' => array("g"),
           'д' => array("d"),
           'е' => array("e"),
           'ё' => array("e"),
           'ж' => array("j"),
           'з' => array("z"),
           'и' => array("i"),
           'к' => array("k"),
           'л' => array("l"),
           'м' => array("m"),
           'н' => array("n"),
           'о' => array("o"),
           'п' => array("p"),
           'р' => array("r"),
           'с' => array("s"),
           'т' => array("t"),
           'у' => array("u"),
           'ф' => array("f"),
           'х' => array("h"),
           'ц' => array("c"),
           'ч' => array("ch"),
           'ш' => array("sh"),
           'щ' => array("sch"),
           'ъ' => array("'"),
           'ы' => array("y"),
           'ь' => array("'"),
           'э' => array("e"),
           'ю' => array("u"),
           'я' => array("ya"),           
           );
    
    $symbol = (string)$symbol; //теперь это точно строка
    
    foreach ($a6 as $index => $sym) {
        if ($index == $symbol) {  
            $symbol2 = $sym[0];
        }
        else {
            return $symbol;
        }
    }
    return $symbol2;
}

$testtranslit = '1';
$testtranslit_length = strlen($testtranslit); //вытаскиваем длину строки

$i = 0;

$i2 = substr($testtranslit, $i, 1); //Вытаскиваем i-ый символ в строке


echo translit($testtranslit);
echo '<br>';
echo $testtranslit_length . '<bf>';



    

?>