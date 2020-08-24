<?php 

include '../dota_DB.php';


// Это только для того, чтобы видеть редактируемые данные
function show_editPage($link)
{

	$title = 'Edit_page';
	$edit = $_GET['edit'];
	// Когда есть, запрос в базу по id
	$query = "SELECT * FROM dota_pages WHERE id = '$edit'";
	$result = mysqli_query($link,$query) or die(mysqli_errors($link));
	$row = mysqli_fetch_assoc($result);	

	$title = $row ['title'];
	$url = $row['url'];
	$text = $row['text'];	

	$content = '<form action="" method="POST">
			<input type="text" name="title" value="'.$title.'" placeholder="title"> <br><br>
			<input type="text" name="url" value="'.$url.'" placeholder="url"><br><br>
			<textarea name="text" placeholder="text" id="" cols="30" rows="10">'.$text.'</textarea><br><br>
			<input type="submit">
	</form>';	

	include 'maket_inc.php';
}

function editPage($link)
{
	$edit = $_GET['edit'];
	if (isset($_POST['title']) && isset($_POST['url']) && isset($_POST['text'])) {
		$title = $_POST['title'];
		$url = $_POST['url'];
		$text = $_POST['text'];

		$query = "UPDATE dota_pages SET title = '$title', url = '$url', `text` = '$text' WHERE id = '$edit'";
		mysqli_query($link,$query) or die(mysqli_errors($link));

		header('Location:index_inc.php');
	}
}

editPage($link);
show_editPage($link);
?>
