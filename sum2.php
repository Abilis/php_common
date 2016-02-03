<?php

function show_result($a, $b, $oper) {

if (is_numeric($a) && is_numeric($b)) {
    
        if ($oper == '+') {
            $result = $a + $b;
            return $result;
        }

        if ($oper == '-') {
            $result = $a - $b;
            return $result;
        }

        if ($oper == '*') {
            $result = $a * $b;
            return $result;
        }

        if ($oper == '/') {
            if ($b != 0) {
               $result = $a / $b;
            return $result; 
            }

            else {
                return 'Ошибка деления на нуль!';
            }
        }
}
else {
    return 'Введены не числа!'; //На случай если введены не числа
}

}

function final_result() {
    
if (isset($_POST['a']) && (isset($_POST['b']))) {
    if (isset($_POST['+'])) {
        $f_res = show_result($_POST['a'], $_POST['b'], '+');
        echo $f_res;
    }
    
     if (isset($_POST['-'])) {
         $f_res = show_result($_POST['a'], $_POST['b'], '-');
         echo $f_res;
    }
         
     if (isset($_POST['*'])) {
        $f_res = show_result($_POST['a'], $_POST['b'], '*');
        echo $f_res;
    }
         
     if (isset($_POST['/'])) {
        $f_res = show_result($_POST['a'], $_POST['b'], '/');
        echo $f_res;
    }
}

}

function what_char() {
    
    if (isset($_POST['+'])) {
        return '+';
    }
    
    if (isset($_POST['-'])) {
        return '-';
    }
    
    if (isset($_POST['*'])) {
        return '*';
    }
    
    if (isset($_POST['/'])) {
        return '/';
    }
    
    else {
        return 'и';
    }
}


?>