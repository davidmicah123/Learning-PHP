<?php

    spl_autoload_register('myAutoloader');

    function myAutoloader($className){
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if (strpos($url, 'includes') !== false) {
            $path = "../classes/";
        }else{
            $path = "classes/";
        }
        $extension = ".class.php";
        $fullpath = $path.$className.$extension;

        if (!file_exists($fullpath)) {
            return false;
        }
        
        include_once $fullpath;
    }
?>