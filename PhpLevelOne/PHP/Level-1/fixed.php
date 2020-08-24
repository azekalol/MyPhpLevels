
/*Сделайте колонку 'редактировать' для каждого работника. Там должна быть ссылка, по переходу на которую появится страница с формой редактирования работника.*/

<?php

error_reporting(-1);
ini_set('display_errors',1);

//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'test'; //имя базы данных

//Создание переменной отображения
$show = '';

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

//Удалить рабочего по id нажатием на ссылку "удалить"
if(isset($_REQUEST['del_id'])){
$id = $_REQUEST['del_id'];
$query = "DELETE FROM workers WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
}

//Редактировать данные рабочего по id нажатием на ссылку "редактировать"
if(isset($_REQUEST['edit_id'])){
$id = $_REQUEST['edit_id'];
$query = "SELECT * FROM workers WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
}else{
//Формируем тестовый запрос:
$query = "SELECT * FROM workers WHERE id>0";
}

//Если заполнены все поля формы добавление или редактирование работника
//Если не заполнено хотябы одно поле вернуться к отображению таблицы
if(isset($_REQUEST['name']) && isset($_REQUEST['age']) && isset($_REQUEST['salary'])){

if(empty($_REQUEST['name']) || empty($_REQUEST['age']) || empty($_REQUEST['salary'])){
header('Location: test_153.php');
exit;
}

$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$salary = $_REQUEST['salary'];

if(!empty($_REQUEST['id'])){
//Редактирование работника
$id = $_REQUEST['id'];
$query = "UPDATE workers SET name='$name', age=$age, salary=$salary WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
}else{
//Добавление нового работника
$query = "INSERT INTO workers SET name='$name', age=$age, salary=$salary";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
}
header('Location: test_153.php');
exit;
}

//Делаем запрос к БД, результат запроса пишем в $result:
$result = mysqli_query($link, $query) or die(mysqli_error($link));

//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

//Вывод формы нового работника или редактирование выбранного
if(isset($_REQUEST['edit_id']) || isset($_REQUEST['new'])){

if(isset($_REQUEST['new'])){
$data[0]['id'] = '';
$data[0]['name'] = '';
$data[0]['age'] = '';
$data[0]['salary'] = '';
}

$show .= "
<form action='' method='get'>
<input type='hidden' name='id' value='&