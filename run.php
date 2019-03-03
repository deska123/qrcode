<?php
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
		if($_SERVER['REQUEST_METHOD'] === 'GET') {
			$plain = "password random Saya 123456";
			echo sha1($plain);
		} else {
			header("Location: index.php");
		}
	} else {
		header("Location: index.php");
	}
?>