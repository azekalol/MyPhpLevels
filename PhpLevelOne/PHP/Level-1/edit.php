<?php
$id = $_GET['edit_id'];

function input($n, $arr) {
$name = $n;
$value = $arr[0][$n];
return '<input name="' . $name . '" value="' . $value . '">';
}

include('work_database.php');

if(!empty($_POST)) {
$n = $_POST['name'];
$a = $_POST['age'];
$s = $_POST['salary'];
$query = "UPDATE morkers SET name = '$n', age = $a, salary = $s WHERE id = $id";
mysqli_query($link, $query) or die(mysqli_error($link));
}

$query = "SELECT * FROM morkers WHERE id = $id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row=mysqli_fetch_assoc($result); $data[]=$row)

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Редактировать сотрудника:</p><br>

<form action="" method="POST">
<?php echo input('name', $data); ?><br><br>
<?php echo input('age', $data); ?><br><br>
<?php echo input('salary', $data); ?><br><br>
<input type="submit" value="Изменить">
</form><br><br>

<a href="NDBwork.php">Назад</a>
<?php print_r('<pre>'); print_r($data);?>
</body>
</html>