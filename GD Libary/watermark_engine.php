<?php
    header('content-type: image/jpeg');

    if (isset($_GET['source'])) {
        $source = $_GET['source'];

        $watermark = imagecreatefrompng('watermark.png');
        $watermark_height = imagesy($watermark); 
        $watermark_width = imagesx($watermark);


        $image = imagecreatetruecolor($watermark_width, $watermark_height);
        $image = imagecreatefrompng($source);


        $image_size = getimagesize($source);
        $x = $image_size[0] - $watermark_width - 10;
        $y = $image_size[1] - $watermark_height - 10;

        imagecopymerge($image, $watermark, $x, $y, 0, 0, $watermark_width, $watermark_height, 90);
        imagejpeg($image, $source.'.watermarked.jpg');
    }else{
        // echo 'no source supplied';
    }

?>