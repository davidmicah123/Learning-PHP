<?php
    require 'connect.inc.php';
    require 'coreinc.php';
   

    if( logged_in() ){
        $firstname = getfield('firstname');
        $surname = getfield('surname');
        echo "Login successful, welcome $firstname $surname. <a href='logout.php'>logout</a><br> ";
        // echo getfield('firstname');
    }else{
        include 'loginform.inc.php';
    }
    
    

    
?>