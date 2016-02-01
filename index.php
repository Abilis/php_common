<?php
echo '1 задание. Обычное ветвление.<br>';
$a = 18;
$b = 44;

if (($a >= 0) && ($b >= 0)) {
    echo 'Сумма: ' . ($a + $b);
}
elseif (($a < 0) && ($b < 0)) {
    echo 'Разность: ' . ($a - $b);
}
else {
    echo 'Произведение: ' . ($a * $b);
}
echo '<br>';
echo '<br>';
echo '2 задание. Здесь нужно использовать тернарный оператор.<br>';

$c = ($a > $b) ? $a : $b;
echo $c;

echo '<br>';
echo '<br>';
echo '3 задание. Здесь нужно вывести список чисел от $a до 9 с помощью switch.<br>';

$a = 6;
switch ($a) {
    case 0: 
        echo '0<br>';
    case 1: 
        echo '1<br>';
    case 2: 
        echo '2<br>';
    case 3: 
        echo '3<br>';
    case 4: 
        echo '4<br>';    
    case 5: 
        echo '5<br>';
    case 6: 
        echo '6<br>';
    case 7: 
        echo '7<br>';
    case 8: 
        echo '8<br>';
    case 9: 
        echo '9<br>';
        break;
    default:
        echo 'На вход поступило число не из диапазона :(';
}

echo '<br>';
echo '<br>';
echo '4 задание. Здесь нужно реализовать все математические операции в виде функций с двумя параметрами.<br>';

function sum($a, $b) {
    return ($a + $b);
}

function raz($a, $b) {
    return ($a - $b);
}

function proiz($a, $b) {
    return ($a * $b);
}

function chast($a, $b) {
    return ($a / $b);
}

//инициализируем переменные
$a4 = 13; 
$b4 = 5;

$sum = sum($a4, $b4);
$raz = raz($a4, $b4);
$proiz = proiz($a4, $b4);
$chast = chast($a4, $b4);

echo 'Сумма ' .$a4 . ' и ' . $b4 . ': ' . $sum . '<br>';
echo 'Разность ' .$a4 . ' и ' . $b4 . ': '  . $raz . '<br>';
echo 'Произведение ' .$a4 . ' и ' . $b4 . ': '  . $proiz . '<br>';
echo 'Частное ' .$a4 . ' и ' . $b4 . ': '  . $chast . '<br>';

echo '<br>';
echo '<br>';
echo '5 задание. Здесь нужно реализовать функцию с тремя параметрами для математических операций.<br>';

function mathOperation ($a, $b, $operation) {
    switch ($operation) {
        case 'sum':
            return sum($a, $b);
            break;
        case 'raz':
            return raz($a, $b);
            break;
        case 'proiz':
            return proiz($a, $b);
            break;
        case 'chast':
            return chast($a, $b);
            break;
        default:
            return 'this is not a math operation!';
    }
} 
 
$mathOperation = 'chast';
$result = mathOperation($a4, $b4, $mathOperation);
echo $result;

echo '<br>';
echo '<br>';
echo '6 задание. Здесь нужно реализовать функцию для возведения в степень числа.<br>';

$a6 = 2;
$n6 = 20;

function step ($a, $n) {
    if (($a > 0) && ($n > 0) && (is_int($a)) && (is_int($n))) {
            if ($n == 1) {
                return $a;
            }
            else {
                $res = $a * step($a, ($n - 1));
                return $res;
            }
    }
    else {
        echo "Не удалось вычислить $a в степени $n :(";
    }
        
}

$res6 = step($a6, $n6);
echo $res6;


echo '<br>';
echo '<br>';
echo '7 задание. 2 функции, вычисляющие максимальное и минимальное число. Если произведение чисел больше 100, но меньше 1000, то от большего отнять меньшее и показать. Если произведение чисел больше 1000, то произведение этих чисел разделить на большее из числел.<br>';

$a7 = 100;
$b7 = 21;

function maximum ($a, $b) {
    if ($a > $b) {
        return $a;
    }
    elseif ($a < $b) {
        return $b;
    }
    else {
        return $a;
    }
}

function minimum ($a, $b) {
    if ($a < $b) {
        return $a;
    }
    elseif ($a > $b) {
        return $b;
    }
    else {
        return $a;
    }
}

if ((($a7 * $b7) > 100) && (($a7 * $b7) < 1000)) {
    $res7 = maximum($a7, $b7) - minimum($a7, $b7);
    }
elseif (($a7 * $b7) > 1000) {
    $res7 = ($a7 * $b7) / maximum($a7, $b7);
}
else {
    $res = 'Результат не вычисляется :(';
    echo 'Что-то пошло не так :(';
}
echo '<br>';
echo 'Первое число: ' . $a7;
echo '<br>';
echo 'Второе число: ' . $b7;
echo '<br>';
echo 'Максимальное число: ' . maximum($a7, $b7);
echo '<br>';
echo 'Произведение чисел: ' . ($a7 * $b7);
echo '<br>';
echo $res7;

?>