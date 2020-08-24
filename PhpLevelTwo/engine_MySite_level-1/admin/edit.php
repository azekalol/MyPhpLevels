<?php 

// Подключение к базе
include '../database_pages.php';
include 'elems/passwords.php';

if (!empty($_SESSION['auth'])) {

	//Функция на форму, чтобы все удобно работало в layout.php
	function getPage($link)
	{
		$title = 'admin add new page';	

		if (isset($_GET['edit_id'])) {	

			$edit_id = $_GET['edit_id'];
			// Редактирование по edit_id
			$query = "SELECT * FROM pages WHERE id= $edit_id";
			$result = mysqli_query($link,$query) or die(mysqli_query($link));
			$page = mysqli_fetch_assoc($result);
		
			//Проверка на существование страницы
			if ($page) {
		
				if (isset($_POST['title']) && isset($_POST['url']) && isset($_POST['text'])) {
					$title = $_POST['title'];
					$url = $_POST['url'];
					$text = $_POST['text'];
				} else {
					$title = $page['title'];
					$url = $page['url'];
					$text = $page['text'];
				}
				//Подключили форму
				ob_start();
				include 'elems/form.php';
				$content = ob_get_clean();	

			}else {
				$content = 'Page not found';
			}
		}else {
			$content = 'This page not found';
		}	

		include 'elems/layout.php';
	}	
	

	function addPage($link) // Функция для добавления страниц, через админку.
	{	// Более защищенная версия, для формы
		if (isset($_POST['title']) && isset($_POST['url']) && isset($_POST['text'])) {
			//Функция m_r_e_s для дого, чтобы обработать строку (если в слове кавычки)
			$title = mysqli_real_escape_string($link, $_POST['title']);
			$url = mysqli_real_escape_string($link, $_POST['url']);
			$text = mysqli_real_escape_string($link, $_POST['text']);	

			$edit_id = $_GET['edit_id'];	

			if (isset($_GET['edit_id'])) {	

				$query = "SELECT * FROM pages WHERE id= $edit_id";
				$result = mysqli_query($link,$query) or die(mysqli_query($link));
				$page = mysqli_fetch_assoc($result);	
	

			//Если url не совпадает, проверка url	
				if ($page['url'] !== $url) {
			// Скорее всего подсчет быстрее, ежели получение данных "SELECT * FROM pages WHERE url= '$url'";
					$query = "SELECT COUNT(*) as count FROM pages WHERE url= '$url'";
					$result = mysqli_query($link,$query) or die(mysqli_query($link));
					$isPage = mysqli_fetch_assoc($result)['count'];	

					// Если занят, мы просто выйдем из условия url и не попадем на **1
					if ($isPage == 1) {
						// Flash message
						$_SESSION['message'] = [
							'text'=>'Page with this url exists!',
							'status'=>'error'
						];
					}
				}
					// **1
				$query = "UPDATE pages SET  title ='$title', url='$url', `text`= '$text' WHERE id=$edit_id";
				mysqli_query($link,$query) or die(mysqli_query($link));	

				$_SESSION['message'] =[
					'text'=>"Page '{$page['title']}' edited successfully!",
					'status'=>'success'
				]; 	

				header('Location: /dvizh/admin/'); die(); // функция die, служит для остановки кода после редиректа
			}
		}else {
			return '';
		}
	}

	addPage($link);
	getPage($link);
}else{
	header('Location: /dvizh/admin/login.php'); die();
}