<?php
session_start();
header("Content-type: image/jpeg");
$img = imagecreate(120,40);
imagecolorallocate($img,240, 97, 86);
$color_texto = imagecolorallocate($img,255,255,255);
imagestring($img,6,30,10,$_SESSION['captcha'], $color_texto);
imagejpeg($img);
?>