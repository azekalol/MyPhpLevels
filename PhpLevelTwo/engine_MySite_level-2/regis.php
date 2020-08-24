<?php 
include 'dota_DB.php';
session_start();

// 1й цикл: отправили запросы
if (!empty($_POST['username']) and !empty($_POST['password']) and !empty($_POST['password1'])) {
	
	//2й цикл: сверили данные, что пришли с 1го цикла (сверили пароль)
	if ($_POST['password'] == $_POST['password1']) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$bith_day = $_POST['bith_day'];
	$email = $_POST['email'];
	$date = date('Y-m-d');
	$password1 = $_POST['password1'];
	// 1й запрос: на существование логина в базе, с 1го цикла
	$query = "SELECT * FROM login WHERE username = '$username'";
	$result = mysqli_query($link,$query);
	$user = mysqli_fetch_assoc($result);
		
		//3й цикл добавили логин
		if (empty($user)) {
		//2я задача зарегали данные пользователя
		$query = "INSERT INTO login SET username = '$username', password = '$password', bith_day = '$bith_day', email = '$email', registration_date = '$date', confirm = '$password1'";
		mysqli_query($link,$query) or die(mysqli_error($link));
	
		$_SESSION['auth'] = true;
		$_SESSION['name'] = $_POST['username'];
		$id = mysqli_insert_id($link);
		$_SESSION['id'] = $id;

		header('Location:1.php');
		}else {
			echo 'Такой логин уже занят';
		}
	}else {
			echo 'Пароли не совпадают';
		}
}
?>

<form action="" method="POST">
	<input name="username" placeholder="login"><br><br>
	<input type="password" name="password" placeholder="password"><br><br>
	<input type="confirm" name="password1" placeholder="reapet password"><br><br>
	<input type="text" name="bith_day" placeholder="bith_day"><br><br>
	<input type="email" name="email" placeholder="email"><br><br>
	<input type="submit" name="submit" value="Отправить">  	
</form>
