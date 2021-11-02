<?php
session_start();
$rand = rand(1000, 9999);
$_SESSION["captcha"] = $rand;
$layer = imagecreatetruecolor(90, 30);
$bg = imagecolorallocate($layer, 255, 255, 255);
imagefill($layer, 0, 0, $bg);
$captcha_text_colour = imagecolorallocate($layer, 0, 0, 0);
imagestring($layer,5,5,5,$rand,$captcha_text_colour);
header('Content-type: image/jpeg');
imagejpeg($layer);

?>
