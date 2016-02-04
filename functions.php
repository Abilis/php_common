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
    
    if ($remember == 'on') {
        setcookie('username', $username, time() + 3600 * 24 * 7 );
        $_SESSION['remember'] = $remember; //запоминаем в сессии выбор
    }
    
    //успешная авторизация
    return true;
}


function logout() {
    
    //делаем куки устаревшими
    setcookie('username', '', time() - 1);
    setcookie('page', '', time() - 1);
    
    //и сбрасываем сессию
    unset($_SESSION['username']);
    unset($_SESSION['page']);
    unset($_SESSION['yes']);
    unset($_SESSION['123']);
    unset($_SESSION['remember']);
    session_destroy(); // и уничтожаем ее. Это делать необязательно
    
    
}

?>