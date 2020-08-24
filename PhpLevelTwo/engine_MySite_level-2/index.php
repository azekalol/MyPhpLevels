<?php 

include 'dota_DB.php';

if (isset($_GET['dota'])) {
	$dota = $_GET['dota'];
}else {
	$dota = 'index';
}

$query = "SELECT * FROM dota_pages WHERE url = '$dota'";
$result = mysqli_query($link,$query) or die(mysqli_query($link));
$dota = mysqli_fetch_assoc($result);

if (!$dota) {
	$query = "SELECT * FROM dota_pages WHERE url = '404'";
	$result = mysqli_query($link,$query) or die(mysqli_query($link));
	$dota = mysqli_fetch_assoc($result);
}


$title = $dota['title'];
$content = $dota['text'];

include 'elems/maket.php';