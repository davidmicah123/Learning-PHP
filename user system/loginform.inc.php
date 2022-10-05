<?php

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        $password_hash = md5($password);

        if (!empty($username) && !empty($password)) {

            $query = "SELECT id FROM users WHERE username = :username AND password = :password";
            $statment = $pdo->prepare($query);

            if ($statment -> execute(['username' => $username, 'password' => $password_hash])) {
                $row_count = $statment->rowcount();

                // var_dump($row_count);

                if ($row_count == 0) {
                    echo 'invalid username or password <br>';
                }else if($row_count == 1){
                    
                    $result = $statment->fetch();
                    $user_id = $result['id'];
                    // echo $user_id;
                    $_SESSION['user_id'] = $user_id;

                    header('Location: index.php');

                }
            }
        }else {
            echo 'fill in all field';
        }
        

    }

?>
<form action="<?php echo $current_file?>" method="post">
    Username:  <input type="text" name="username"><br><br>
    Password: <input type="text" name="password" id=""><br><br>
    <input type="submit" value="login"><br><br>

    <a href="register.php">register now</a>
</form>