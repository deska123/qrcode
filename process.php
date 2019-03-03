<?php
	if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
		if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['key'])) {
			$key = $_POST['key'];

			if($key == 'dd432507d5a1310f13b0124fc23620207e2cd8a5') {
				include('phpqrcode/qrlib.php'); 

				$category = $_POST['category'];
				$file = $_POST['file'];
				$fileName = 'tempQRCode_' . md5($file) . '.png';
				$path = 'images/' . $fileName;

				if(file_exists($path)) {
					unlink($path);
				}

				if($category == 'link') {
					QRcode::png($file, $path);
					echo "<img src=\"" . $path . "\" class=\"img-thumbnail\"><br><br>";
					echo "<p><strong>Link</strong></p>";
					echo "<p style=\"word-wrap: break-word;\"><a href=\"" . $file . "\" target=\"_blank\">" . $file . "</a></p>";
					echo "<p><strong>File Name</strong></p>";
					echo "<p style=\"word-wrap: break-word;\">" . $fileName . "</p><br>";
					echo "<a href=\"" . $path . "\" class=\"btn btn-success btn-md\" target=\"_blank\" download>Download QR Code";
					echo "</a>";
				}
			} else {
				header("Location: index.php");
			}
		} else {
			header("Location: index.php");
		}
	} else {
		header("Location: index.php");
	}
?>