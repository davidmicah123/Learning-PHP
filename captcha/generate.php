<?php
    session_start();
    header('content-type: image/jpeg');

    $text = $_SESSION['secure'];

    $font_size = 17;

    $image_width = 150;

    $image_height = 40;

    $image = imagecreate($image_width, $image_height);
    imagecolorallocate($image, 225, 225, 225);

    $text_color = imagecolorallocate($image, 0, 0, 0);

    for ($x=1; $x<=30; $x++){ 
        $x1 = rand(1, 100); 
        $y1 = rand(1, 100);
        $x2 = rand(1, 100);
        $y2 = rand(1, 100);

        imageline($image, $x1, $y1, $x2, $y2, $text_color);
    }

    imagettftext($image, $font_size, 0, 10, 30, $text_color, 'font.ttf', $text);

    imagejpeg($image);

?>