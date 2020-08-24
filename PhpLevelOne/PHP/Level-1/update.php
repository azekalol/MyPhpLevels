<?php
$id = $_GET['edit_id'];

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
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Обновление информации о сотруднике</title>
        <!--<link href="style.css" rel="stylesheet">-->
    </head>
    <body>
<form>
    <input name="name" placeholder="Имя"><br><br>
    <input name="age" placeholder="Возраст"><br><br>
    <input name="salary" placeholder="Зарплата"><br><br>
    <input name="submit" type="submit" value="Обновить">
</form><br><br>
<a href="NDBwork.php">Назад</a>
</body>
</html>