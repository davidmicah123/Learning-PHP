<?php
    error_reporting(0); updating error reporting setting
    Here is my php file
    phpinfo(); => PHP information function
    print "<strong> hello world. </strong>"; slower than echo
    echo "<strong> hello world. </strong>";
    echo "<input type=\"text\" name=\"\" placeholder=\"php boss\" id=\"\">";
    echo '<input type="text" name="" id="">';

    
    //// Variable
    $text = "hello wale";
    $text2 = "hello world";
    $number = 15;
    echo  $text2;
    echo '<br>';
    echo $number;
    echo '<br>';

    
    // // Concatination
    $day = 'Friday';
    $date = 24;
    $year = 2000;
    echo 'The date is <strong>'.$day.' '.$date.' '.$year.'</strong>';
    echo '<br>';
    echo "The date is $day $date $year";

    
    //// If else statment
    if (0) {
         echo 'True';
    }else {
         echo 'False';
    }

    
    // // If else if
    $number = 11;
    if($number == 10){
        echo 'Equal to ten';
    }else if ($number == 11) {
        echo 'Eqal to eleven'; 
    }else {
        echo 'Not equal';
    }


    // Assignment Operatior
    $number1 = 10;
    $number1 += 3;
    echo $number1;
    $text = 'Hello';
    $text .= 'World';
    echo $text;


    // Comparison operation
    $num1 = 10;
    $num2 = 9;
    if ($num1 >= $num2){
        echo 'Yes';
    }else{
        echo 'No';
    }



    echo "<br>";

    $password = 'password';
    if ($password == 'password') {
        echo 'correct';
    }else{
        echo 'wrong';
    }

    // Arithmetic operators 
    $sum = 10 / 20;
    echo $sum;
    $operand1 = 100;
    $operand2 = 50;
    $operand3 = 2;

    $result = ($operand1 + $operand2) / $operand3;
    echo $result;

    echo "<br>";
    
    $result2 =  $operand1 % 3;
    echo $result2;
    
    echo "<br>";

    $operand1++;
    echo $operand1;
    
    echo "<br>";

    $operand2--;
    echo $operand2;

    Logical operator
    $number  = 520;
    $upper = 1000;
    $lower = 500;

    if ($number >= $lower && $number <= $upper) {
        echo 'Between the range';
    }else {
        echo "Number must be between $lower and $upper inclusive";
    }

    echo "<br>";

    $num1 = 6;
    $canbe1 = 2;
    $canbe2 = 4;
    if (!($num1 == $canbe1) && !($num1 == $canbe2)) {
        echo "OK!";
    }else {
        echo "Not OK!";
    }

    // Tripple equal to
    $num1 = '1';
    $num2 = 1;

    if ($num1 === $num2) {
        echo 'Equal!';
    }else {
        echo 'Not equal';
    }


    // Loops
    // While loop
    $counter = 1;

    while ($counter <= 10) {
        echo $counter.' Hello <br>';
        $counter++;
    }

    // Do while loop
    $counter2 = 1;
    do{
        echo 'This will always show once <br>';
        $counter2++;
    }while($counter2 <= 10);

    For loop
    for ($count = 1; $count <= 10; $count++) {
        echo $count."<br>";
    }

?>
<!-- <h1>welcome</h1> --> 

<form action="index.php" method="post">
    <input type="submit" value="roll dice" name="roll">
</form>

<form action="index.php" method="post">
    <textarea name="text" id="" cols="30" rows="7"></textarea><br><br>
    Search for: <br>
    <input type="text" name="search_for"><br><br>
    Replace with: <br>
    <input type="text" name="replace_with"><br><br>
    <input type="submit" value="submit">
</form>

<!-- Embing php value into html -->
<input type="text" name="" value="<?php echo $text; ?>">

<form action="index.php" method="get">
    Name: <input type="text" name="user_name" id=""><br><br>
    <input type="submit" value="Submit">
</form>

<hr>

<form action="index.php" method="post">
    <textarea name="user_input" id="" cols="30" rows="5"></textarea> <br><br>
    <input type="submit" value="submit">
</form>