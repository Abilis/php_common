<?php
session_start();

require "functions.php";

logout(); // сбрасываем авторизацию
header("Location: index.php");
//var_dump($_SESSION['page']);
//var_dump($_SESSION['username']);

?>