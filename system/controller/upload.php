 <?php
 /*
 * ©copyright Grisecorp
 * System - Web operation System 1.0
 * Autor -  Geraldo Grise 
 */

?>
<?php


$image = imagecreatefrompng($_POST['image']);

imagealphablending($image, false);
imagesavealpha($image, true);
imagepng($image, 'wPaint.png');




?>
