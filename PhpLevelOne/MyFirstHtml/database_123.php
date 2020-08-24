<?php 
ini_set('diplay_error','on');
$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'project';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_error($link));
?>