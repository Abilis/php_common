<?php
error_reporting( E_ERROR );

//Подключение модулей
require_once('db-chat.php');
require_once('model.php');

//Подключение к базе данных
startup();

//Была ли отправка формы?
if (!empty($_POST)) {
    send_message($_POST['name'], $_POST['text']);
    
    header('Location: chat.php');
    exit();
}

//Получаем список сообщений
$messages = get_messages();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Чат с БД</title>
</head>
<body>
    <form method="post">
    Имя: <br />
    <input type="text" name="name" value=<?=$_SESSION['username']?> ><br />
    Сообщение: <br />
    <input type=text name="text" /><br />
    <input type="submit" value="Отправить" /><br />
    </form>
    
    <hr />
    
    <?php
        
    foreach ($messages as $m) {
     
        echo '<p>';
        echo '<i>' .$m['dt_msg'] . ' - ' . $m['username'] . '</i><br />';
        echo $m['message'];
        echo '</p>';
    }   
    ?>
</body>
</html>