<?php 
ini_set('display_errors','on');
$host = 'localhost';
$user = 'admin';
$password = '123';
$db = 'project';

$link = mysqli_connect($host,$user,$password,$db) or die(mysqli_error($link));

?>