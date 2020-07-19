<?php

$text = strtoupper(strip_tags(urldecode($_GET['nama'])));
$md5 = md5($text);
$path = "images/$md5.jpg";

if (isset($_GET['dl'])) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=sertifikate_tolol_untuk_'.strtolower(preg_replace("/[^a-zA-Z0-9]+/", "_", $text)). ".jpg");
    header('Content-Transfer-Encoding: binary');
    header('Connection: Keep-Alive');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
} else {
    header('Pragma: public');
    header('Cache-Control: max-age=86400');
    header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));
    header('Content-Type: image/jpeg');
}

if (!file_exists($path)) {

    $image1 = imagecreatefromjpeg('template.jpg');

    $font_size = 30;
    $font_file = './HelveticaNeueMed.ttf';
    $type_space = imagettfbbox($font_size, 0, $font_file, $text);
    $text_width = abs($type_space[4] - $type_space[0]);
    $text_height = abs($type_space[5] - $type_space[1]);

    $text_color = imagecolorallocate($image1, 255, 255, 255);

    $width = ImageSX($image1);
    $height = ImageSY($image1);


    $x = (($width - $text_width) / 2);
    $y = $text_height + (($height - $text_height) / 2);
    //255, 29, 800, 450, 527.5, 239.5
    //echo "$text_width, $text_height, $width, $height, $x, $y";
    imagettftext($image1, $font_size, 0, $x, $y, $text_color, $font_file, $text);

    imagejpeg($image1, $path, 100);
    imagedestroy($image1);
}
header('Content-Length: ' . filesize($path));
readfile($path);
