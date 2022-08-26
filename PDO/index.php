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

    // User input
    $author = 'Brad';
    $is_published = true;
    $id = 1;
    $limit = 1;

    // Positional parameter
    $sql = "SELECT * FROM post where author =  ?  && is_published = ?  LIMIT  ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$author, $is_published, $limit]);
    $posts = $stmt->fetchAll();

    
    // Named parameter
    // $sql = "SELECT * FROM post where author =  :author && is_published = :is_published";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
    // $posts = $stmt->fetchAll();


    // var_dump($posts);


    foreach($posts as $post){
        echo $post->Title . '<br>';
    }

    // Fetch single post

    // $sql = "SELECT * FROM post where id =  :id";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute(['id' => $id]);
    // $post = $stmt->fetch();

    // echo $post->Body;


    // GET row count
    // $stmt = $pdo->prepare('SELECT * FROM POST WHERE author = ?');
    // $stmt->execute([$author]);
    // $post_count = $stmt->rowcount();

    // echo $post_count;

    // Insert Data 
    // $title = 'post Five';
    // $body = 'This is post 5';
    // $author = 'David';


?>