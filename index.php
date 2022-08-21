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

    // Switch statment 
    $number = 4;
    switch ($number){
        case 1:
            echo 'One';
        break;
        case 2: 
            echo 'Two';
        break;
        case 3: 
            echo 'Three';
        break;
        default:
            echo 'Number not found';
        break;
    }

    $day = 'Sunday';
    switch ($day) {
        case 'Saturday':
        case 'Sunday':
            echo "Its a weekend";
        break;
        default: 
            echo('Not a weekend');
        break;
    }




    // Die and Exit function
    echo 'Hello ';
    echo "<br>";
    // die('Debugging using die function');
    
    echo ' World';
    echo "<br>";

    // Connecting to Database
    @mySql_connect('localhost', 'Dell PC', '') or die('Cound not connect to Database');

    echo 'connected';

    Function
    function MyName(){
        echo "David";
    }
    echo 'My name is ';
    MyName();

    echo "<br>";

    $inumber1 = 10;
    $inumber2 = 5;
    function add($number1, $number2){
        echo $number1 + $number2;
    }
    add($inumber1, $inumber2);
    
    function displayDate($day, $date, $year){
        echo $day.' '.$date.' '.$year;
    }
    echo "<br>";
    displayDate('Sunday', 07, 2022);
    
    function add($number1, $number2){
        $result = $number1 + $number2;
        return $result;
    }
    function divide($number1, $number2){
        $result = $number1 / $number2;
        return $result;
    }
    $sum = divide(add(10, 10), add(5, 5));
    echo $sum;

    // GLobal variable
    $user_ip = $_SERVER['REMOTE_ADDR'];
    
    function echo_ip(){
        global $user_ip;
        $string = 'Your IP address is '.$user_ip;
        echo $string;
    }
    echo_ip()
    
    String functions
    $string = "This is an example string";
    // Word count function
    $string_word_count = str_word_count($string, 0, '.&!');
    // print_r($string_word_count);
    echo ($string_word_count);

    echo '<br>';

    // Shuffle function => shufles string
    $string_shuffled = str_shuffle($string);
    echo $string_shuffled;

    // Sunstring =>  
    $sub_string = substr($string_shuffled, 0, strlen($string)/2);
    echo $sub_string;

    // Reverse => reversing a string
    $str_reversed = strrev($string);
    echo $str_reversed;

    echo '<br>';

    //similar_text => Calculating string similarity in prcentage
    $string1 = "This is my essay i am going to be talking about PHP.";
    $string2 = "This is my essay i am will to be talking about PHP.";
    similar_text($string1, $string2, $result);
    echo 'The similarity between both essay is '.$result.'%';

    echo '<br>';

    // String length => strlen()
    $string_length = strlen($string);
    echo $string_length;

    echo '<br>';

    // Trim, lthrim = left thrim, rthrim = right thrim;
    $string_thrimed = trim($string);
    echo $string_thrimed;

    echo '<br>';


    // addslashes() => security purpose, strip slashes
    $slash = 'This is a <img src="image.jpg"> string';
    $string_slashes = htmlentities(addslashes($slash));
    echo $string_slashes;

    echo '<br>';

    echo stripcslashes($string_slashes);


    Arrays
    $food = array('Pasta', 'Pizza', 'Salad'); 
    print_r($food);
    $food[4] = 'Fruit';
    echo '<br>';
    print_r($food);
    echo '<br>';
    
    echo $food[1];
    
    Associative array => allows you to define your own key
    $food = array('Pasta'=>300, 'Pizza'=>700, 'Salad'=>150, 'Vegetable'=>250); 
    print_r($food);
    
    echo '<br>';

    echo $food['Vegetable'];


    // Multi dimensionsl array
    $caategories = array('Healthy'=>
                            array('Salad', 'Vegetable', 'pasta'), 
                        'unhealthy'=>
                            array('Pizza', 'Ice cream', 'Pop-corn'));

    // echo $caategories['unhealthy'][1];

    // FOr each construct/loop
    foreach($caategories as $element => $inner_array){
        echo '<strong>'.$element.'<br>'.'</strong>';
        foreach ($inner_array as $item) {
            echo $item.'<br>';
        }
    }

    Include and require Function, require: kill page if included/imported page does not exixt, handles error in a better way
    require 'practice.php';
    $var = "String";
    echo $var1;


    // include_once and require_once => checkd if page has been included if no the it includes else it does not require twice
    require 'practice.php';
    require_once 'practice.php';

    Expression matching: "Preg_match" chcking for pattern inside a string
    $string = 'This is a string';

    if(preg_match('/ /', $string)){
        echo 'Match found';
    }else{
        echo 'No match founc';
    }


    function has_space($string){
        if(preg_match('/ /', $string)){
            return true;
        }else {
            return false;
        }
    }
    $string = 'This has no space';

    if(has_space($string)){
        echo 'Has at least one space';
    }else{
        echo 'Has no spaces.';
    }

    String function: string length
    $string = "David";
    $string_length = strlen($string);
    // echo $string_length;


    for ($x=1; $x <= $string_length ; $x++) { 
        echo $x.'<br>';
    }

    Upper and lowercas conversion function
    $string = 'I can BE any case';
    $string_lower = strtolower($string);
    $string_upper = strtoupper($string);
    // echo $string_lower;
    // echo $string_upper;


    if (isset($_GET['user_name']) && !empty($_GET['user_name'])) {
        $user_name = $_GET['user_name'];
        $user_name_lc = strtolower($user_name);
        if ($user_name_lc=='alex') {
            echo 'You are the best, '.$user_name; 
        }
    }


    String position: strpos();
    $offset = 0;
    $find = 'is';
    $find_len = strlen($find);
    $string = 'This is a string and it is an example';
    // echo strpos($string, $find, 10);

    while ($string_position = strpos($string, $find, $offset)) {
        echo '<strong>'.$find.'</strong>'.' found at '.$string_position.'<br>';
        $offset = $string_position + $find_len;
    }

    // substr_replace(): Replacing a part of a string
    $string = 'This part don\'t search. This part search';
    $string_new = substr_replace($string, 'alex', 29, 4);
    echo $string_new;

    str_replace() : replace a word with another
    $find = array('is', 'string', 'example');
    $replace = array('IS', 'STRING', 'EXAMPLE');
    $string = 'This is a string and is an example';
    $new_string = str_replace($find, $replace, $string);
    echo $new_string;

    str_ireplace => not case sensitive

    $find = array('alex', 'billy', 'dale');
    $replace = array('a**x', 'b***y', 'd**e');

    if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
        $user_input = $_POST['user_input'];
        $user_input_low = strtolower($user_input);

        $user_input_new = str_ireplace($find, $replace, $user_input_low);

        echo $user_input_new;

    }


    // substr_replace
    $offset = 0;
    if (isset($_POST['text']) && isset($_POST['search_for']) && isset($_POST['replace_with'])) {
        $text = $_POST['text'];
        $search = $_POST['search_for'];
        $replace = $_POST['replace_with'];

        $search_length = strlen($search);

        if (!empty($text) && !empty($search) && !empty($replace)) {

            while ($strpos = strpos($text, $search, $offset)) {
                $offset = $strpos + $search_length;

                $text = substr_replace($text, $replace, $strpos, $search_length);
                echo $text;
            }

        }else{
            echo 'Fill out all fields';
        }
    }

    // Time stamp
    $actual_time  = date('H:i:s', $time);
    Strtotime() convert string to time
    $time = time();
    
    $time_now  = date('d M Y @ H:i:s', $time);
    // $time_modified  = date('d M Y @ H:i:s', strtotime('+1 week 2 hours 30 seconds'));
    $time_modified  = date('d M Y @ H:i:s', $time-(7*84*3*30));
    echo "The time now is $time_now <br> The time modified is $time_modified";

    Random number generator rand();

    $rand = rand();
    $max = getrandmax();


    if (isset($_POST['roll'])) {
        $rand = rand(1, 6);
        echo 'you rolled a '.$rand;
    }

    // SERVER
    include 'practice.php';
    // $scrip_name = $_SERVER['SCRIPT_NAME'];
    // echo $scrip_name;


    if (isset($_POST['submit'])) {
        echo 'Process 1';
    }

    $host = $_SERVER['HTTP_HOST'];
    $images = $host.'/images';


    // Header function
    $redirect_page = "http://google.co.uk";
    $redirect = true;
    if ($redirect == true) {
        header('Location:'.$redirect_page);
    }

    ob_end_flush();

    // Blocking user IP: not reliable
    require 'test.php';
    // echo $ip_address;
    foreach ($ip_blocked as $ip) {
        if ($ip = $ip_address) {
            die('Your ip address, '.$ip. ' has been blocked');
        }
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