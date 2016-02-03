<?php
//Функция обработки результата
function show_result($a, $b) {
    $result = $a + $b;
//    echo $a .' + ' . $b . ' = ' . $result . '<br><br>';
    return $result;
//    echo '<a href="sum.php">Хочу суммировать еще<a/>';
    
}

//Функция показа формы
function show_form() {
    
    echo    '<form action="sum.php" method="post">';
        if (isset($_POST['a'])) {
            echo    '<input type="text" name="a" value=' . $_POST['a'] . '>';
        }
        else {
            echo    '<input type="text" name="a" />';
        }
    echo    '  +  ';
        if (isset($_POST['b'])) {
            echo    '<input type="text" name="b" value=' . $_POST['b'] . '>';
        }
        else {
            echo    '<input type="text" name="b" />';
        }
            echo    '<input type="submit" value=" = " />';
        

        if (isset($_POST['a']) && (isset($_POST['b']))) {
            echo    '<b>' . show_result($_POST['a'], $_POST['b']) . '</b>';
        }    
    echo    '</form>';    
    
}


//Точка входа

$result = '';
show_form();

//Показываем результат операции или форму ввода
/*if (isset($_POST['a']) && (isset($_POST['b']))) {
    show_result($_POST['a'], $_POST['b']);
}
else {
    show_form();
}*/

// value="$_POST['a']

?>