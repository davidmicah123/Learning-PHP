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

?>

<!-- Embing php value into html -->
<!-- <input type="text" name="" value="<?php echo $text; ?>"> -->
