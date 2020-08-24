<?php 
ini_set('display_errors', 'on');
$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'workers';

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_error($link));
?>