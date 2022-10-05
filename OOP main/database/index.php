<?php
    include '../includes/autoloader.inc.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $test_object = new Test();
        $test_object->setFoodStmt("Ewedu", 250, "h");
    ?>
</body>
</html>