<?php
    // w -> write to the file
    // r => readd from the file
    // a => append to the file

    // $handle = fopen('names.txt', 'w');
    // fwrite($handle, 'David'."\n");
    // fwrite($handle, 'ER');

    // $handle = fopen('names.txt', 'a');
    // fwrite($handle, "\n".'Silas'."\n");
    
    // fclose($handle);

    // echo 'written';


    // if (isset($_POST['name'])) {
    //     $name = $_POST['name'];

    //     if (!empty($name)) {
            
    //         $handle = fopen('names.txt', 'a');
    //         fwrite($handle, $name."\n");
    //         fclose($handle);

    //         // Reading in data
    //         $count = 1;
    //         $readin = file('names.txt');
    //         $readin_count = count($readin);
    //         echo 'current name in file: ';

    //         foreach ($readin as $fname) {
    //             echo trim($fname);
    //             if ($count < $readin_count) {
    //                 echo ', ';
    //             }
    //             $count ++;
    //         }
    //     }else {
    //         echo 'please enter a name';
    //     }
    // }

    // reading data from a file
    // $filename = 'names.txt';
    // $handle = fopen($filename, 'r');
    // $datain =  fread($handle, filesize($filename));

    // turning text to array
    // $names_array = explode(',', $datain);
    
    // turning array to text implode
    // foreach ($names_array as $name) {
    //     echo $name.'<br>'; 
    // }

    // $names_array = array('Dav', 'Dan', 'pan');
    // $string = implode('+ ', $names_array);

    // echo $string;


    // $directory = 'files';
    // if ($handle = opendir($directory.'/')){
    //     echo 'Looking inside \''.$directory.'\':<br>';
    
    //     while ($file = readdir($handle)) {
    //         if ($file != '.' && $file != '..') {
    //             echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
    //         }
    //     }
    // }


    // Checking if file exixt
    // $filename_or = 'image.jpg';
    // $filename = rand(1000, 9999).md5($filename_or).rand(1000, 9999);

    // echo $filename;
    // $filename = 'file.txt';
    // if (file_exists($filename)) {
    //     echo 'File already exixt';
    // }else {
    //     $handle = fopen($filename, 'w');
    //     fwrite($handle, 'Nothing is here');
    //     fclose($handle);
    // }


    // Deleting and renaming file
    
    // Deleting
    // $filename = 'file_to_delete.txt';

    // // Note @
    // if (@unlink($filename)) {
    //     echo 'File <strong>'.$filename.'</strong> has been deleted';
    // }else {
    //     echo 'File cannot be deleted';
    // }

    // Renaming
    $filename = 'file_to_rename.txt';
    $rand = rand(1000, 99999);
    
    if(rename($filename, $rand.'.txt')){
        echo 'File <strong>'.$filename.'</strong> Has been renamed to <strong>'.$rand.'.txt </strong>';
    }else{
        echo 'error renaming file';
    }

?>

<!-- <form action="file.php" method="post"> -->
    <!-- Name: <br> -->
    <!-- <input type="text" name="name" id=""> <br><br> -->
    <!-- <input type="submit" value="submit"> -->
<!-- </form> -->