<?php
//Чтение из файла всей информации о посещениях
$lines = file('visits.txt');
?>

<html>
<head>
    <title>Журнал посещений</title>
</head>
<body>
<h2>Журнал посещений</h2>
<a href="index.php">На главную</a>
<br />
<br />
    
<table border="1">
    <tr>
        <td>Время</td>    
        <td>IP-адрес</td>
        <td>Откуда</td>
    </tr>  
    
    <?php
        $n = count($lines);
    
        for($i = 0; $i < $n; $i = $i + 3) {
         
            echo '<tr>';
                echo '<td>' . $lines[$i + 0] . '</td>';
                echo '<td>' . $lines[$i + 1] . '</td>';
                echo '<td>' . $lines[$i + 2] . '</td>';
            echo '</tr>';
            
        }    
    ?>
</table>
    
</body>
</html>