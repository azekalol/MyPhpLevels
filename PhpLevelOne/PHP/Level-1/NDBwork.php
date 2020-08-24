<?php 
include('work_database.php'); //соединимся с базой
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NDBwork</title>
</head>
<body>
	<h1>New Data Base</h1>
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>age</th>
			<th>salary</th>
			<th>delete</th>
			<th>create</th>
		</tr>
		<?php 
		//Удалить рабочего по id нажатием на ссылку "удалить"
		if (isset($_GET['del-id'])) {
			$del=$_GET['del-id'];
			$query = "DELETE FROM morkers WHERE id=$del";
			$result = mysqli_query($link,$query) or die(mysqli_error($link));
		}
		//Добавить рабочего по id заполнив форму
		if (!empty($_POST)) {
			$name = $_POST['name'];
			$age = $_POST['age'];
			$salary = $_POST['salary'];
			$query = "INSERT INTO morkers SET name = '$name', age = '$age', salary = '$salary'";
			$result = mysqli_query($link,$query) or die(mysqli_error($link));
		}
		//Редактировать рабочего по id

		//Делаем запрос к БД, результат запроса пишем в $result:
		$query = "SELECT * FROM morkers";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

		//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
		for ($data=[];$row = mysqli_fetch_assoc($result);$data[] = $row);

		//Вывод на экран
		$result = '';
		foreach ($data as $elem) {
			$result .='<tr>';
			$result .= '<td>' . $elem['id'] . '</td>';
			$result .= '<td>' . $elem['name'] . '</td>';
			$result .= '<td>' . $elem['age'] . '</td>';
			$result .= '<td>' . $elem['salary'] . '</td>';
			$result .= '<td><a href="?del-id='.$elem['id'].'">delete</a></td>';
			$result .='<td><a href="edit.php?edit_id='.$elem['id'].'">fixed</a></td>';
			$result .= '</tr>';
		}echo $result;
		?>
	</table>
	<form action="" method="POST">
	<input name="name">
	<input name="age">
	<input name="salary">
	<input type="submit" value="добавить работника">
</form>
</body>
</html>