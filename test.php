<?php 

    // Get data: form validation => includes data in url
    Form secirity using htmlentities() function
    echo $_GET['day'];

    if (isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
        $day = htmlentities($_GET['day']);
        $date = htmlentities($_GET['date']);
        $year = htmlentities($_GET['year']);

        if (!empty($day) && !empty($date) && !empty($year)) {
            echo 'It is '.$day.' '.$date.' '.$year;
        }else {
            echo 'Fill in all fields';
        }
    }


    // Post: sending data using HTTP post method
    $match = 'pass23';
    // echo $_POST['password'];
    if (isset($_POST['password'])) {
        $password = $_POST['password'];

        if (!empty($password)) {
            if ($password == $match) {
                echo 'Correct password';
            }else{
                echo 'That is incorrect';
            }
        }else{
            echo 'Please enter a password';
        }
    }


?>



<form action="test.php" method="get">
    Day: <br> <input type="text" name="Day"> <br>
    Date: <br> <input type="text" name="date"> <br>
    Year: <br> <input type="text" name="year"> <br> <br>
    <input type="submit" value="submit">
</form>


<form action="test.php" method="post">
    Password: <br> <input type="password" name="password" id=""><br><br>
    <input type="submit" value="submit">
</form>

<form action="test.php" method="get">
    Day: <br><input type="text" name="day" id=""> <br>
    Date: <br><input type="text" name="date" id=""> <br>
    Year: <br><input type="text" name="year" id=""><br> <br>
    <input type="submit" value="submit">
</form>