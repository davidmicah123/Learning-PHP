<?php
    require 'coreinc.php';
    echo $http_referer;

    session_destroy();
    header('Location: index.php');
?>