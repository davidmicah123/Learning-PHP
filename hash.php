<?php
    // MD% Encryption   
    // $string = 'password';
    // $string_hash = md5($string);
    // echo $string_hash;

    if (isset($_POST['user_password']) ) {
        $user_password = md5(htmlentities($_POST['user_password']));

        if(!empty($user_password)){
            $filename = 'hash.txt';
            $handle = fopen($filename, 'r');
            $file_password = fread($handle, filesize($filename));
            

            if ($user_password == $file_password) {
                echo 'correct password';
            }else{
                echo 'incorrect password';
            }
            
        }
        
    }else{
        echo 'Please enter a password';
    }
?>


<form action="hash.php" method="post">
    Password: <input type="text" name="user_password" id=""> <br><br>
    <input type="submit" value="submit">
</form>