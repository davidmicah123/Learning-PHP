<?php
    session_start();

    if (!isset($_POST['secure'])) {
        $_SESSION['secure'] = rand(1000, 9999);
    }else{
        if ($_SESSION['secure'] == $_POST['secure']) {
            echo 'A match';
        }else{
            echo 'incorrect, try again';
            $_SESSION['secure'] = rand(1000, 9999);
        }
    }



?>

<br>
<img src="generate.php" alt="image not found"><br>

<form action="index.php" method="post">
    Type the value you see: <input type="text" name="secure" size="6" id="">
    <input type="submit" value="submit">
</form>