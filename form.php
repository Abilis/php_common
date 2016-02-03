<?php
include 'sum2.php'
?>

<html>
<head>
</head>

<body>
    <form action="form.php" method="post">
        <p>
            <?php if (isset($_POST['a'])) {
                        echo '<input type="text" name="a" value=' . $_POST['a'] . '>';
                        }
                    else {
                        echo '<input type="text" name="a">';
                    }
            ?>
                    <label> <?php
                                echo what_char();                        
                            ?>
                    </label>
            
             <?php if (isset($_POST['b'])) {
                        echo '<input type="text" name="b" value=' . $_POST['b'] . '>';
                        }
                    else {
                        echo '<input type="text" name="b">';
                    }
            ?>
            
                    <label> = </label>
            <?php 
                final_result();
            ?>
        </p>
    <p>
        <input type="submit" name="+" value="+">
        <input type="submit" name="-" value="-">
        <input type="submit" name="*" value="*">
        <input type="submit" name="/" value="/">
    </p>
        
    </form>
    
    
<?php 

    
 ?>
    
    </body>
</html>