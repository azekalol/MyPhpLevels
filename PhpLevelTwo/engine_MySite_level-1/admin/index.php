<?php 

// Подключение к базе
include '../database_pages.php';
include 'elems/passwords.php';

// Пароль для админки
if (!empty($_SESSION['auth'])) {

	//Создали функцию, которая выводит таблицу страниц в админке
	function showPageTable($link)
	{
		// Подключение наших страниц через БД
		$query = "SELECT id, title, url FROM pages WHERE url != '404'";
		$result = mysqli_query($link,$query) or die(mysqli_query($link));
		for($data = []; $row = mysqli_fetch_assoc($result); $data[]=$row);
		// Создание таблицы
		$content = '<table>
			<tr>
				<th>Title</th>
				<th>URL</th>
				<th>Edit</th>
				<th>delete</th>
			</tr>';	

		foreach ($data as $page) {
			$content .= "<tr>
				<td>{$page['title']}</td>
				<td>{$page['url']}</td>
				<td><a href=\"/dvizh/admin/edit.php?edit_id={$page['id']}\">edit</a></td>
				<td><a href=\"?delete={$page['id']}\">delete</a></td>
			</tr>";
		}
		$content .= '</table>';
		$title = 'admin main page';	

		include 'elems/layout.php';
	}
	//Создали функцию, которая удаляет в таблице строку со страницей в админке
	function deletePage($link)
	{
		// Подключение наших страниц через БД
		if (isset($_GET['delete'])) {
			$id = $_GET['delete'];
			$query = "DELETE FROM pages WHERE id = $id";
			mysqli_query($link,$query) or die(mysqli_query($link));
			// Flash message
			$_SESSION['message'] =[
				'text'=>"Page '{$page['title']}' deleted successfully!",
				'status'=>'success'
			]; 	

			header('Location: /dvizh/admin/'); die(); // функция die, служит для остановки кода после редиректа
		}
	}	

	deletePage($link);
	showPageTable($link);
}else {
	header('Location: /dvizh/admin/login.php'); die();
}
