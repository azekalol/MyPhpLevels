<?php 
ini_set('display_errors','on');

$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'test1';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_errors($link));
mysqli_query($link, "SET NAMES 'utf8'");

include 'elems/header.php';

$login = isset($_POST['username']) ? $_POST['username'] : null;
$passowrd = isset($_POST['password']) ? $_POST['password'] : null;


if ($login && $password) {
	$query = "SELECT * FROM users WHERE username = '$login' and password = '$password'";
	$result = mysqli_query($link,$query) or die($link);
	$row = mysqli_fetch_assoc($result);

	
}

?>

<div class="form">
	<form action="" method="POST">
			<div class="login">
			<input type="text" name="username" placeholder="login">
			<?php
			if ($login === '' && isset($_POST['submit']) && !empty($_POST['submit'])) {
			 	echo 'введите логин';
			 }
			?>
			</div>
			<div class="login">
			<input type="password" name="password" placeholder="password">
			<?php
			if (empty($row['password']) and !empty($_POST['submit'])) {
			 	echo 'введите пароль';
			}
			?>
			</div>
		<div class="submit">
			<input type="submit" name="submit"><br>
		</div>
	</form>
</div>