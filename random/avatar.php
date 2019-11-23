<?php
	$avatar = 0;
	$num = rand(1, 2);

	switch ($num) {
		case 1:
			$avatar = "http://anotherdayanotherga.me/img/rawezamgif.gif";
		break;
		case 2:
			$avatar = "http://anotherdayanotherga.me/img/testsquare.gif";
		break;
	}

	$new = imagecreatefromgif($avatar);
	imagegif($new);
	imagedestroy($new);
?>