<?php 

include '../dota_DB.php';
	
	$content = '
	<form action="" method="POST">
		<input type="text" name="title" placeholder="title"> <br><br>
		<input type="text" name="url" placeholder="url"><br><br>
		<textarea name="text" placeholder="text" id="" cols="30" rows="10"></textarea><br><br>
		<input type="submit">
	</form>';

	$title = 'Add_page';
	include 'maket_inc.php';

function addPage($link)
{
	if (isset($_POST['title']) && isset($_POST['url']) && isset($_POST['text'])) {
		$title = $_POST['title'];
		$url = $_POST['url'];
		$text = $_POST['text'];

		$query = "INSERT INTO dota_pages (title, url, `text`) VALUES ('$title','$url', '$text')";
		mysqli_query($link,$query) or die(mysqli_errors($link));

		header('Location:index_inc.php');
	}
}

addPage($link);
?>
