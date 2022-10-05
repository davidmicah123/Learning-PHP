<?php
    header('content-type: image/jpeg');
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
    }else{
        $email = 'no email specified';
    }
    $email_length = strlen($email);

    $font_size = 4;
    $image_height = ImageFontHeight($font_size) + 5;
    $image_width = ImageFontWidth($font_size) * ($email_length +3);


    $image = imagecreate($image_width, $image_height);

    imagecolorallocate($image, 0, 0, 0);
    $font_color = imagecolorallocate($image, 255, 255, 255);

    imagestring($image, $font_size, 10, 2, $email, $font_color);

    imagejpeg($image);
?>