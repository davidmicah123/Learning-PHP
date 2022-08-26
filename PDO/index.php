<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'pdoposts';

    // Set DSN
    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // PDO QUERY
    $stmt = $pdo->query('SELECT * FROM  post');

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['Title'] . '<br>';
    }
    
    while ($row = $stmt->fetch()) {
        echo $row->Title . '<br>';
    }

    #prepared statment (prepare & execute)

    // Unsafe 
    $sql = "SELECT * FROM post where Title =  '$title' ";

    // Fetch multipule post


?>