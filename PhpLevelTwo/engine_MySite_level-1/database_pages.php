<?php 
error_reporting(E_ALL);
ini_set('display_errors','on');
//Стартуем сессию
session_start();

$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'practice';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");
?>