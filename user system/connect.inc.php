<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'login_system';

    // Set DSN
    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
?>