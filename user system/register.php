<?php
    require 'coreinc.php';
    require 'connect.inc.php';

    if (!logged_in()) {

        if ( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])){
                           
                $username = $_POST['username'];
                $password = $_POST['password'];
                $password_confirm = $_POST['password_again'];

                $password_hash = md5($password);

                $firstname = $_POST['firstname'];
                $suraname = $_POST['surname'];

                if(strlen($username) > 30 || strlen($firstname) > 40 || strlen($suraname) > 40){
                    echo 'please adhere to our max length policy';
                }else{ 
                if (!empty($username) && !empty($password) && !empty($password_confirm) && !empty($firstname) && !empty($suraname)) {
                    
                    if ($password != $password_confirm) {
                        echo 'passwords do not match';
                    }else{
                        $query = "SELECT username FROM users WHERE username = :username";
                        $statment = $pdo->prepare($query);
                        $statment->execute(['username' => $username]);
                        $row_count = $statment->rowcount();
                        if ($row_count == 1) {
                            echo 'username already exixt';
                        }else{
                            $query = "INSERT INTO users VALUES('', :username, :password, :firstname, :surname)";
                            $statment = $pdo->prepare($query);
                            if($statment->execute(['username' => $username, 'password' => $password_hash, 'firstname' => $firstname, 'surname' => $suraname])){
                                header("Location: register_success.php");
                            }else{
                                echo 'sorry, we coudn\'t register you at this time, try again later'; 
                            }
                        }
                    }
                }else{
                    echo 'All fields are required';
                }
            } 
            
        }
?>
    <form action="register.php" method="post">
        Username: <br><input type="text" name="username" id="" maxlength = "30" value="<?php if(isset($username)){ echo $username; }?>"> <br><br>
        Password: <br><input type="text"  name="password" id=""> <br><br>
        Confirm Password: <br><input type="text" name="password_again" id=""><br><br>
        Firstname: <br><input type="text" name="firstname" id="" maxlength = "40" value="<?php if(isset($firstname)){ echo $firstname;}?>"><br><br>
        Surname: <br><input type="text" name="surname" id="" maxlength = "40" value="<?php if(isset($suraname)){ echo $suraname; }?>"> <br><br>
        <input type="submit" value="Register">
    </form>
<?php
    }else if(logged_in()) {
        echo 'you are already registered and logged in';
    }

?>