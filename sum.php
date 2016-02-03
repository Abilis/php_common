<?php
//Функция обработки результата
function show_result($a, $b) {
    $result = $a + $b;
    echo $a .' + ' . $b . ' = ' . $result . '<br><br>';
    echo '<a href="sum.php">Хочу суммировать еще<a/>';
    
}

//Функция показа формы
function show_form() {
    
    echo    '<form action="sum.php" method="post">';
    echo    '<input type="text" name="a" />';
    echo    '  +  ';
    echo    '<input type="text" name="b" />';
    echo    '<input type="submit" value=" = " />';            
    echo    '</form>';    
    
}


//Точка входа

//Показываем результат операции или форму ввода
if (isset($_POST['a']) && (isset($_POST['b']))) {
    show_result($_POST['a'], $_POST['b']);
}
else {
    show_form();
}

?>