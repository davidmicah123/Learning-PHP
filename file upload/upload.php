<?php

    $name = $_FILES['file']['name'];
    $size  = $_FILES['file']['size'];
    $max_size = 2097152;
    // $error = $_FILES['file']['error'];
    $type = $_FILES['file']['type'];
    $extension = strtolower(substr($name, strpos($name, '.') + 1));


    $temp_name = $_FILES['file']['tmp_name'];
    

    if (isset($name)) {
        if (!empty($name)) {
            if (($extension == 'jpg'|| $extension == 'jpeg') && $type == 'image/jpeg' && $size <= $max_size) {
                $location = 'uploads/';
    
                if(move_uploaded_file($temp_name, $location.$name)){
                    echo 'Upload successful';
                }else {
                    echo 'an error occured';
                }                
            }else{
                echo 'File must be jpg/jpeg and must be 2mb  or less';
            }

        }else{
            echo 'Please upload a file';
        }
    }

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id=""><br><br>
    <input type="submit" value="submit">
</form>