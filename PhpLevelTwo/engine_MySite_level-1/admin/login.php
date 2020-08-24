<?php 

// Подключение к базе
include '../database_pages.php';
include 'elems/passwords.php';

// Пароль для админки
if (isset($_POST['password']) && md5($_POST['password']) == 'f1c1592588411002af340cbaedd6fc33') {
	$_SESSION['auth'] = true;

	$_SESSION['message'] =[
		'text'=>"You login successfully!",
		'status'=>'success'
	]; 	

	header('Location: /dvizh/admin/'); die();
}else {
	include 'elems/form_auto.php';
}
