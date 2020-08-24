<?php 
include 'menu.php';
require_once 'practice.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu-Link</title>
</head>
<body>
<p> 
	<?php
		$image = new Image();
		$image -> setAttr('src', '4519.jpg') -> setAttr('width','500') -> setAttr('height','300');
		echo $image; 
	?>
</p>
</body>
</html>

