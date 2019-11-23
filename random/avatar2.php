<?php
	$avatar = 0;
	$num = rand(1, 2);

	switch ($num) {
		case 1:
			$avatar = "img/rawezamgif.gif";
			$fp = fopen($avatar, 'rb');
			header("Content-Type: image/gif");
			header("Content-Length: " . filesize($avatar));
			fpassthru($fp);
			fclose($fp);
		break;
		case 2:
			$avatar = "img/testsquare.gif";
			$fp = fopen($avatar, 'rb');
			header("Content-Type: image/gif");
			header("Content-Length: " . filesize($avatar));
			fpassthru($fp);
			fclose($fp);
		break;
	}
?>