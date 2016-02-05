<?php

function send_message($name, $text) {
    
    //Обрезаем пробелы справа и слева
    $name = trim($name);
    $text = trim($text);
    
    if ($name == '' || $text == '') {
        return;
    }
    
    //устанавливаем текущую дату
    $dt_msg = date('Y-m-d G:i:s');
    
    //формируем запрос
    $sql = "INSERT INTO chat_messages (dt_msg, username, message) VALUES ('$dt_msg', '$name', '$text')";
    
    
    //совершаем запрос
    $result = mysql_query($sql);
    
    if (!$result) {
        die(mysql_error());
    }
    
    //Запоминаем имя пользователя в сессии
    $_SESSION['username'] = $name;
    
}

function get_messages() {

    //Формируем запрос
    $sql = "SELECT * FROM chat_messages ORDER BY dt_msg DESC";
    $result = mysql_query($sql);
    
    if (!$result) {
        die(mysql_error());
    }
    
    //Теперь получим все сообщения из БД и засунем в массив
    $n = mysql_num_rows($result);
    $arr = array();
    
    for ($i = 0; $i < $n; $i++) {
        $row = mysql_fetch_assoc($result);
        $arr[] = $row;
    }
    
    return $arr;
}

?>