<?php
//1 задание
echo '1 задание:'.'<br>';
$str_var = 'Строковая переменная'; //строковая переменная
echo $str_var;
echo '<br>';

$intA = 5;
echo $intA; //челое число
echo '<br>';

$floatB = 7.95; //дробное число
echo $floatB; 
echo '<br>';

define("MY_CONSTANT", 42); //константа
echo MY_CONSTANT;
echo '<br>';

$d = 078; //восьмеричное число
echo $d;
echo '<br>';

$e = 0x7604; //шестнадцатеричное число
echo $e;
echo '<br>';
echo '<br>';

//2 задание. Переменные в двойных кавычках
echo '2 задание:'.'<br>';
$str_var = 'Строковая переменная';
echo "$str_var";
echo '<br>';

$intA = 5;
echo "$intA";
echo '<br>';

$floatB = 7.95;
echo "$floatB";
echo '<br>';

define("MY_CONSTANT2", 42);
echo MY_CONSTANT2;
echo '<br>';

$d = 078; //восьмеричное число
echo "$d";
echo '<br>';

$e = 0x7604; //шестнадцатеричное число
echo "$e";
echo '<br>';
echo '<br>';

//3 задание. Переменные в одинарных кавычках
echo '3 задание:'.'<br>';
$str_var = 'Строковая переменная';
echo '$str_var';
echo '<br>';

$intA = 5;
echo '$intA';
echo '<br>';

$floatB = 7.95;
echo '$floatB';
echo '<br>';

define("MY_CONSTANT3", 42);
echo MY_CONSTANT3;
echo '<br>';

$d = 078; //восьмеричное число
echo '$d';
echo '<br>';

$e = 0x7604; //шестнадцатеричное число
echo '$e';
echo '<br>';
echo '<br>';

//4 задание. Нужно вывести в восьмеричной системе числа от 010 до 020
echo '4 задание:'.'<br>';
echo 010;
echo '<br>';
echo 011;
echo '<br>';
echo 012;
echo '<br>';
echo 013;
echo '<br>';
echo 014;
echo '<br>';
echo 015;
echo '<br>';
echo 016;
echo '<br>';
echo 017;
echo '<br>';
echo 018;
echo '<br>';
echo 019;
echo '<br>';
echo 020;
echo '<br>';
echo '<br>';

//5 задание. Нужно вывести в шестнадцатеричной системе числа от х0 до xF
echo '5 задание:'.'<br>';
echo 0x0;
echo '<br>';
echo 0x01;
echo '<br>';
echo 0x02;
echo '<br>';
echo 0x03;
echo '<br>';
echo 0x04;
echo '<br>';
echo 0x05;
echo '<br>';
echo 0x06;
echo '<br>';
echo 0x07;
echo '<br>';
echo 0x08;
echo '<br>';
echo 0x09;
echo '<br>';
echo 0xa;
echo '<br>';
echo 0xb;
echo '<br>';
echo 0xc;
echo '<br>';
echo 0xd;
echo '<br>';
echo 0xe;
echo '<br>';
echo 0xf;
echo '<br>';
echo '<br>';

//6 задание. Нужно вывести на экран четверостишие
echo '6 задание:'.'<br>';
$str1 = 'Я помню чудное мгновенье:';
$str2 = 'Передо мной явилась ты,';
$str3 = 'Как мимолетное виденье,';
$str4 = 'Как гений чистой красоты.';
$str5 = '<i>А.С. Пушкин</i>';

echo $str1.'<br>';
echo $str2.'<br>';
echo $str3.'<br>';
echo $str4.'<br>';
echo $str5.'<br>';
echo '<br>';
echo '<br>';

//7 задание. Нужно сделать то же, что и в 6 задании, но с помощью только одного echo
echo '7 задание:'.'<br>';
echo $str1 . '<br>' . $str2 . ' <br>' . $str3 . '<br>' . $str4 . '<br>' . $str5 . '<br>';
echo '<br>';
echo '<br>';

//8 задание. Нужно сложить  разные типы.
echo '8 задание:'.'<br>';
$a8 = 'Привет, ';
$b8 = 18;
$c8 = $a8 + $b8;
echo $c8;
/*Получилось 18. Очевидно, это из-за того, что при попытке преобразовать строку в цисло PHP получил нуль,
который успешно прибавил к числу 18*/
echo '<br>';
echo '<br>';

//9 задание. Нужно дать ответ на вопрос, как работает оператор xor
echo '9 задание:'.'<br>';
$a0 = 0;
$a1 = 1;
$b0 = 0;
$b1 = 1;

$c00 = ($a0 xor $b0);
$c01 = ($a0 xor $b1);
$c10 = ($a1 xor $b0);
$c11 = ($a1 xor $b1);

echo (int)$c00.'<br>';
echo (int)$c01.'<br>';
echo (int)$c10.'<br>';
echo (int)$c11.'<br>';

/*Получилось 0 1 1 0. Это сложение по модулю 2. Это значит. что результат истинен,
если истинен один из операторов, но не оба. Выходит, что о $a xor $a будет афдыу для любых $a*/
echo '<br>';
echo '<br>';

$a = true;

$c = ($a xor $a);
echo (int)$c;
//Так и вышло

?>
