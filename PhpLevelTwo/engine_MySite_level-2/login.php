<?php  
include 'dota_DB.php';

session_start();

if (!empty($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	$user = mysqli_fetch_assoc($result);

	if (!empty($user)) {
		$_SESSION['auth'] = true;
		$_SESSION['name'] = $_POST['username'];
			if ($username == $_POST['username'] and $password == $_POST['password']) {
				header('Location:1.php');
			}
	}else {
		echo 'не верный пароль либо логин, <a href= login.php>Повторить</a>'.'<br/><br/>';
		echo '<a href= regis.php>Регистрация</a>';
	}
}

?>

<form action="" method="POST">
	<input type="text" name="username" placeholder="username"><br><br>
	<input type="password" name="password" placeholder="password"><br><br>
	<input type="submit" name="submit" value="Отправить">
</form>

