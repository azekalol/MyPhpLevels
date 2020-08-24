<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Введите ваш город</h3>
	<form action="" method="GET">
	<input type="text" name="name">
	<input type="submit">
</form>
</body>

<?php
	//Если форма была отправлена и город не пустой:
	if (!empty($_REQUEST['name'])) {
		$name = strip_tags($_REQUEST['name']);
		echo 'Привет! '.$name;
	}
?>

</html>