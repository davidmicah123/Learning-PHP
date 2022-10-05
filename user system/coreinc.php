<?php
    ob_start();
    session_start();
    $current_file = $_SERVER['SCRIPT_NAME'];


    function logged_in(){
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
            return true;
        }else{
            return false;
        }
    }


    function getfield($field){
        global $pdo;

        $query = "SELECT $field FROM users WHERE ID = :id";
        if($field_getter = $pdo->prepare($query)){

           $field_getter -> execute(['id' => $_SESSION['user_id']]);
           if( $query_result = $field_getter->fetchAll()){
               return $query_result[0][$field];
           }
        }
    }
?>