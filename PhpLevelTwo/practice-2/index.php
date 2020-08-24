<?php
// Соединение с базой
include('DB_name.php'); 
// Условие: Пришли данные? Если данные пришли
if (isset($_POST['name']) && isset($_POST['review'])) {
	$name = $_POST['name'];
	$review = $_POST['review'];
	$date = date('Y.m.d H:i:s');
	
	// Добавляем полученные записи в таблицу
	$query = "INSERT INTO `baza` (`name`, `review`, `date`) VALUES ('$name', '$review', '$date')";
	mysqli_query($link,$query) or die(mysqli_error($link));
}
// Если посты пришли 
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}
$limit = 3;
$number = ($page * $limit) - $limit;
// результат
$res_count = mysqli_query($link,"SELECT COUNT(*) FROM `baza`");
//for ($countArr=[]; $row=mysqli_fetch_assoc($res_count); $countArr[]=$row);
$rerow = mysqli_fetch_row($res_count);
$total = $rerow[0];
$str_page = ceil($total / $limit);
// настройка кодировки
mysqli_query($link,"SET NAMES 'utf8'");
// Вывод данных на экран + сортировка по id
$query = "SELECT * FROM baza ORDER BY id DESC LIMIT $number,$limit";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
// Полученные данные перевести в формат массива
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
			<div>
				<nav>
				  <ul class="pagination">
					<li class="disabled">

						<a href="?page=1"  aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<?php 
					for ($i=1; $i <=$str_page; $i++) { 
					?>
					<li><a href="?page=<?= $i?>"><?= $i?></a></li>
					<?php } ?>
					<li>
						<a href="?page=5" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				  </ul>
				</nav>
			</div>
			<?php 
			foreach ($array as $elem) {
			?>
			<div class="note">
				<p>
					<span class="date">'26.05.2020 23:59:59'</span>
					<span class="name"><?= $elem['name'] ?></span>
				</p>
				<p>
				<?= $elem['review'] ?>
				</p>
			</div>
			<?php } ?>	
			<div class="note">
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
			<?php 
			if (!empty($_POST)) {
			?>
			<div class="info alert alert-info">
				Запись успешно сохранена!
			</div>
		<?php } ?>
			<div id="form">
				<form action="" method="POST">
					<p><input name="name" class="form-control" placeholder="Ваше имя"></p>
					<p><textarea name="review" class="form-control" placeholder="Ваш отзыв"></textarea></p>
					<p><input type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
			</div>
		</div>
	</body>
</html>

