<!-- <h1>DMD Home page</h1> -->
<?php
    session_start();
    // $var1 = "this is var 1";
    // $script_name = $_SERVER['SCRIPT_NAME'];


    $string = "This is a string";
    $string2 = "This is a different string";
    $replaced = str_replace(' is ',' was ', $string);
    // echo $replaced;
    // echo $string.'<br>';
    
    // echo strtolower($string);
    // echo '<br>';
    // echo strtoupper($string);
    // echo '<br>';

    // similar_text($string, $string2, $result);
    // echo $result;

    // echo '<br>';

    // $condition = true;

    // if ($condition == true) {
    //     echo 'condition is true';
    // }

    $master_username = "DMD";
    $master_password = "pass123";
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        if (!empty($username) && !empty($password)) {
            if ($username  == $master_username && $password == $master_password) {
                echo 'Login successful, welcome '.$username;
            }else{
                echo 'Incorrect credentials';
            }
        }else{
            echo 'fill in all fields';
        }
    }


    
    echo '<br>';
    if (isset($_POST['text']) && isset($_POST['search']) && isset($_POST['replace'])) {
        $text = htmlentities($_POST['text']);
        $search = htmlentities($_POST['search']);
        $replace = htmlentities($_POST['replace']);
        if (!empty($text) && !empty($search) && !empty($replace)) {
            $replaced = str_replace($search, $replace, $text);
            echo $replaced;
        }else{
            echo 'Fill in all fields';
        }
    }

?>