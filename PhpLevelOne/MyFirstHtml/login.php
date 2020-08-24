<?php 

include 'database_123.php';

if (!empty($_POST['login']) and !empty($_POST['password'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];

	$query = "SELECT * FROM dota WHERE login = '$login' and password = '$password'";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	$row = mysqli_fetch_assoc($result);
	if (!empty($row)) {
			echo 'Все верно';
			header('Location: index.php');
	} else {
			echo 'Неверно!';
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Dota</title>
</head>
<body>
	<div class="fonfoto">
	<header class="header-block">
	<?php include('head.php'); ?>
	</header>
	<div class="auth">
		<div class="form">
			<form action="" method="POST">
				<div class="input-data">
				<input type="text" name="login" placeholder="введите login">
					<div class="input-data">
					<input type="password" name="password" placeholder="введите password">
					</div>
						<div class="input-btn">
						<input type="submit" name="submit" value="Войти">
						</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</body>
</html>