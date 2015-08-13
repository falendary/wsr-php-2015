<?php 
session_start();
header('Content-type: image/png');
$_SESSION["captcha_code"] = substr(md5(uniqid()), 0, 6);
$img = imagecreatetruecolor(100, 30);
$bg = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $bg);
imagestring($img, 15, 15, 10, $_SESSION["captcha_code"], imagecolorallocate($img, rand(0, 200), rand(0, 200), rand(0, 200)));
imageline($img, rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), imagecolorallocate($img, rand(0, 200), rand(0, 200), rand(0, 200)));
imageline($img, rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), imagecolorallocate($img, rand(0, 200), rand(0, 200), rand(0, 200)));
imageline($img, rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), imagecolorallocate($img, rand(0, 200), rand(0, 200), rand(0, 200)));
imageline($img, rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), imagecolorallocate($img, rand(0, 200), rand(0, 200), rand(0, 200)));
imageline($img, rand(0, 100), rand(0, 100), rand(0, 100), rand(0, 100), imagecolorallocate($img, rand(0, 200), rand(0, 200), rand(0, 200)));
imagepng($img);
imagedestroy($im);
?>