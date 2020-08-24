<?php 

// Подключение к базе
include 'database_pages.php';

//Если ГЕТ запрос есть, то загрузи нам страницу индекс.
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}else {
	$page = '/dvizh/'; // url страницы, той что в базе
}

// Подключение наших страниц через БД
$query = "SELECT * FROM pages WHERE url='$page'";
$result = mysqli_query($link,$query) or die(mysqli_query($link));
$page = mysqli_fetch_assoc($result);

// Если страницы нет, выдай 404. Если есть Пункт 1.
if (!$page) {
	$query = "SELECT * FROM pages WHERE url='404'";
	$result = mysqli_query($link,$query) or die(mysqli_query($link));
	$page = mysqli_fetch_assoc($result);
	header("HTTP/1.0 404 Not Found");
}
//Пункт 1.
$title = $page['title'];
$content = $page['text'];
include 'elems/layout.php';
