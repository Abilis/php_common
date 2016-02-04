<?php

function login ($username, $remember) {
    
    $username = trim($username);
    
    //имя не должно быть пустой строкой
    if ($username == '') {
        return false;
    }
    
    //запоминаем имя в сессии
    $_SESSION['username'] = $username;
    
    //и в куках, если пользователь выставил галку "запомнить
    
    if ($remember) {
        setcookie('username', $username, time() + 3600 * 24 * 7 );
    }
    
    //успешная авторизация
    return true;
}


function logout() {
    
    //делаем куки устаревшими
    setcookie('username', '', time() - 1);
    
    //и сбрасываем сессию
    unset($_SESSION['username']);
    
}

?>