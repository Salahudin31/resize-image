<?php
//*** Include the class
include("resize_class.php");

//*** 1) initials/load image
$resizeObj = new resize('image/10tt.png');


if(($resizeObj->width > 400)|| ($resizeObj->height > 400)){
	$resizeObj->resizeImage('630','720','exact');
	$resizeObj->saveImage('sampled-resized5.png',100);
}
/* 2) resize image (option: exact,potrait,landscape,atuo,crop)
$resizeObj->resizeImage(150,100,'crop');

//*** 3) Save image
$resizeObj->saveImage('sampled-resized.gif',100);
*/
?>