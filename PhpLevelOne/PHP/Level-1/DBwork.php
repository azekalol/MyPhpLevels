<?php 
	include('work_database.php');
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Data base</title>
</head>
<body>
	<h1>Data base</h1>
	<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
		<th>fixed</th>
	</tr>
	<?php 
	include('add.php');
	
	// удаление по id (до получения!):
	if (isset($_GET['del'])) {
		$del = $_GET['del']; //получим id работника
		$query = "DELETE FROM vorkers WHERE id=$del"; //сформируем запрос на удаление
		mysqli_query($link,$query) or die(mysqli_error($link));// удалим
	}
	//Получение всех данных с таблицы
	$query = "SELECT * FROM vorkers";
	$result = mysqli_query($link,$query) or die(mysqli_error($link) );
	
	//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
	for ($data = [];$row = mysqli_fetch_assoc($result); $data[] = $row);
		
		//Вывод на экран
		$result = '';
		foreach ($data as $elem) {
			$result .='<tr>';
			$result .= '<td>' . $elem['id'] . '</td>';
			$result .= '<td>' . $elem['name'] . '</td>';
			$result .= '<td>' . $elem['age'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td><a href="?del=' .$elem['id'] .'">удалить</a></td>';
			$result .= '<td><a href="fixed.php?fix=' .$elem['id'] .'">редактировать</a></td>';
			
			$result .= '</tr>';
		}echo $result;
	?>
</table>
</body>
</html>