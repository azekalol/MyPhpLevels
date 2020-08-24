<!--1-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
<form action="" method="GET">
	<input type="text" name="name" placeholder="Введите ваше имя">
	<input type="submit" name="submit" value="Отправить">
</form>
<?php
	if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
		echo 'Ваше имя-'.$name;
	}
?>
</body>
</html>

<!--2-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="" method="GET">
		<label>Введите ваше имя:</label><br>
		<input type="text" name="name" placeholder="имя"><br><br>
		<label>Введите ваш возраст:</label><br>
		<input type="text" name="age" placeholder="возраст"><br><br>
		<label>Введите ваше сообщение:</label><br>
		<textarea name="message" placeholder="текст"></textarea><br>
		<input type="submit" name="submit" placeholder="Введите сообщение">
	</form>
<?php
	if (isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$age = $_REQUEST['age'];
		$message = $_REQUEST['message'];
		echo "Привет, $name, $age лет <br> $message";

	}
?>
</body>
</html>

<!--3-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<?php
	if (!isset($_REQUEST['age'])) {
	 ?>
	<form action="" method="POST">
		<label>Ваш возраст:</label><br>
		<input type="text" name="age"><br>
		<input type="submit" name="" value="Отправить">
	</form>
	<?php
	}
	?>
	<?php
	if (isset($_REQUEST['age'])) {
		$age = strip_tags($_REQUEST['age']);
		echo 'Ваш возраст-'.$age;
	}
	?>
</body>
</html>

<!--4-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form action="" method="POST">
		<input type="email" name="email"><br>
		<input type="password" name="password"><br>
		<input type="submit" name="submit"><br>
	</form>
<?php
if (isset($_REQUEST['submit'])) {
	$login = 'sakenov.a.s@mail.ru';
	$pass = '1234567';
	$email = trim($_REQUEST['email']);
	$password = trim($_REQUEST['password']);
	if ($login == $email and $pass == $password) {
	echo "Доступ разрешен!";
}else echo "Доступ запрещен!";
}
?>
</body>
</html>

<!--5-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form action="" method="GET">
		<input type="text" name="name" value= "<?php if (isset($_REQUEST['name'])) echo $_REQUEST['name'];?>"> <br>
		<input type="submit" name="submit">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		echo $name;
	}
	?>
</body>
</html>

<!--6-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form action="" method="GET">
		<input type="text" name="name" value="<?php if (isset($_REQUEST['submit'])) echo $_REQUEST['name']?>"><br>
		<textarea name="message">
			<?php if (isset($_REQUEST['message'])) echo $_REQUEST['message'];?>
		</textarea><br>
		<input type="submit" name="submit">
	</form>
	<?php
	if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['name'];
		$message = $_REQUEST['message'];
	}
	?>
</body>
</html>

<!--7-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form action="" method="GET">
		<input type="text" name="name" placeholder="Введите имя"><br>
		<input type="hidden" name="checkbox" value="0"><label>Отметь меня</label>
		<input type="checkbox" name="checkbox" value="1"><br>
		<input type="submit" name="submit"><br>
	</form>
	<?php
	if ((!empty($_REQUEST['checkbox']==0) and isset($_REQUEST['submit']))) {
		$name = $_REQUEST['name'];
		$checkbox = $_REQUEST['checkbox'];
		echo $name." ",'Вы не отметили галочку';
	}
	if (!empty($_REQUEST['checkbox']==1)) {
		$name = $_REQUEST['name'];
		echo $name." ", 'Молодец, вы меня заметили';
	}
	?>
</body>
</html>

<!--8-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form action="" method="POST">
	<h2><i>Укажите какими языками програмирования вы владеете</i></h2><br>
	<input type="checkbox" name="lang[]" value="html"><label>html</label><br>
	<input type="checkbox" name="lang[]" value="css"><label>css</label><br>
	<input type="checkbox" name="lang[]" value="php"><label>php</label><br>
	<input type="checkbox" name="lang[]" value="javascript"><label>javascript</label><br><br>
	<input type="submit" name="" value="Отправить">
	</form>
	<?php
	if (isset($_REQUEST['lang'])) {
	echo 'Вызнаете:'.implode(',',$_REQUEST['lang']);
	}
	?>
</body>
</html>
