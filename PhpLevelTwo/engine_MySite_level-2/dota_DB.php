<?php 
error_reporting(E_ALL);
ini_set('display_errors','on');


$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'zzz';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");
?>