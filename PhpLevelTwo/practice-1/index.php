<?php 
include('database.php'); //соединяемся с базой

//Если форма была заполнена и результаты пришли в базу
if (isset($_POST['name']) && isset($_POST['message'])) {
$name = $_POST['name'];
$message = $_POST['message'];

//Добавляем данные с формы в базу
$query = "INSERT INTO `blog` (`name`, `message`) VALUES ('$name', '$message')";
mysqli_query($link,$query) or die(mysqli_error($link));
}

//Делаем запрос к БД, результат запроса пишем в $result:
mysqli_query($link,"SET NAMES 'utf8'");
$query = "SELECT * FROM blog order by id desc"; //order by...это для сортировки по id
$result = mysqli_query($link,$query) or die(mysqli_error($link));

// Данные, что дала база выводим в формат массива
for($array = [];$row = mysqli_fetch_assoc($result);$array[] = $row);

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<div id="wrapper">
			<h1>Гостевая книга</h1>
			<?php foreach ($array as $elem) {
			?>

			<div class="note">
				<p>
					<span class="date">16.04.2014 14:59:59</span>
					<span class="name"><?= $elem['name'] ?></span>
				</p>
				<p>
					<?php echo $elem['message'] ?>
				</p>
			</div>	
			<div class="note">
				<?php } ?>
				<p>
					<span class="date">16.04.2014 14:59:59</span>
					<span class="name">Николай</span>
				</p>
				<p>
					Ut varius commodo fringilla. Nullam id pulvinar odio. Pellentesque gravida aliquam ipsum, et malesuada neque molestie eget. Vestibulum sagittis finibus efficitur. Donec sit amet aliquet dolor, vitae ornare tortor. Etiam eget augue nec diam vehicula bibendum. Nulla quis erat lacus. Vestibulum quis mattis augue. Praesent dignissim, justo non aliquam feugiat, lorem metus egestas leo, quis eleifend odio quam in ex. Aenean diam est, scelerisque ac ultricies sit amet, vulputate in tortor. Etiam ac mi enim. Sed pellentesque elementum erat eu eleifend. Integer imperdiet sem eu magna feugiat, sed efficitur velit convallis. 
				</p>
			</div>
			<div class="note">
				<p>
					<span class="date">15.04.2014 12:59:59</span>
					<span class="name">Петр</span>
				</p>
				<p>
					Phasellus gravida fermentum pellentesque. Aenean non neque mollis nisl dapibus eleifend. Sed interdum dui nec dictum elementum. Proin eget semper dolor, ut commodo nibh. 
					Quisque vitae pharetra ligula. Sed dictum, sem sed pellentesque aliquam, tellus sapien dapibus magna, eu suscipit lacus augue sed velit. Ut vehicula sagittis nulla, et aliquet elit. Quisque tincidunt sem nibh, finibus dictum nisl vulputate quis. In vitae nisl et lacus pulvinar ornare id ac libero. Morbi pharetra fringilla erat ut lacinia. 
				</p>
			</div>	
			<div class="info alert alert-info">
				Запись успешно сохранена!
			</div>
			<div id="form">
				<form action="" method="POST">
					<p><input name="name" class="form-control" placeholder="Ваше имя"></p>
					<p><textarea name="message" class="form-control" placeholder="Ваш отзыв"></textarea></p>
					<p><input type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
			</div>
		</div>
	</body>
</html>

