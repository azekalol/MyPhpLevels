<?php 

// Подключение к базе
include '../database_pages.php';
include 'elems/passwords.php';

if (!empty($_SESSION['auth'])) {

	//Функция на форму, чтобы все удобно работало в layout.php
	function getPage()
	{
		$title = 'admin add new page';
		// Чтобы сохранялись данные полей, если ошибка или при обновы страницы
		if (isset($_POST['title']) && isset($_POST['url']) && isset($_POST['text'])) {
			$title = $_POST['title'];
			$url = $_POST['url'];
			$text = $_POST['text'];
		}else{
			$title = '';
			$url = '';
			$text = '';
		}
		// Подключили форму
		ob_start();
		include 'elems/form.php';
		$content = ob_get_clean();	

		include 'elems/layout.php';
	}	

	// Для добавления страниц, через админку.
	function addPage($link)
	{	// Более защищенная версия, для формы
		if (isset($_POST['title']) && isset($_POST['url']) && isset($_POST['text'])) {
			// Функция m_r_e_s для дого, чтобы обработать строку (если в слове кавычки)
			$title = mysqli_real_escape_string($link, $_POST['title']);
			$url = mysqli_real_escape_string($link, $_POST['url']);
			$text = mysqli_real_escape_string($link, $_POST['text']);
			// Запрос в базу, есть ли уже такая страница (но так медленно) (получение данных)
			//$query = "SELECT * FROM pages WHERE url= '$url'";
			//$result = mysqli_query($link,$query) or die(mysqli_query($link));
			//$isPage = mysqli_fetch_assoc($result);	

			// Скорее всего подсчет быстрее, ежели получение данных
			$query = "SELECT COUNT(*) as count FROM pages WHERE url= '$url'";
			$result = mysqli_query($link,$query) or die(mysqli_query($link));
			$isPage = mysqli_fetch_assoc($result)['count'];
			
			// Должен выдавать 3 разных сообщения (добавилось, не получилось добавить и такая страница уже есть)
			if ($isPage) {
				// Пользуемся сессией
				$_SESSION['message'] = [
					'text'=>'Page with this url exists!',
					'status'=>'error'
				]; 
			// Страница уже добавлена
			}else {
				//(title, url, text) добавление параметров в базу (``) вот эти кавчки спасают
				$query = "INSERT INTO pages (`title`, `url`, `text`) VALUES ('$title', '$url', '$text')";
				mysqli_query($link,$query) or die(mysqli_query($link));
				// Flash message
				$_SESSION['message'] = [
					'text'=>'Page added successfully!',
					'status'=>'success'
					];
				// В редирект передали ГЕТ запрос (?added=1), для вывода записи
				header('Location: /dvizh/admin/'); die(); // функция die, служит для остановки кода после редиректа	

			}
		}else {
			return '';
		}
	}

	addPage($link);
	getPage();

}else {
	header('Location: /dvizh/admin/login.php'); die();
}