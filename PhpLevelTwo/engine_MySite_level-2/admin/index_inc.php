<?php 

include '../dota_DB.php';

// Админ-таблица
function showAdmin_page($link)
{
	$query = "SELECT id, title, url FROM dota_pages WHERE url != '404'";
	$result = mysqli_query($link,$query) or die(mysqli_errors($link));
	for($data = [];$row= mysqli_fetch_assoc($result); $data[] = $row);	

	$content = '<table>
		<tr>
			<th>title</th>
			<th>url</th>
			<th>edit</th>
			<th>delete</th>
		</tr>';	

	foreach ($data as $dota) {
		$content .= "<tr>
			<td>{$dota['title']}</td>
			<td>{$dota['url']}</td>
			<td><a href = \"edit.php?edit={$dota['id']}\">edit</a></td>
			<td><a href = \"?delete={$dota['id']}\">delete</a></td>
		</tr>";	
	}
	$content .= '</table>';	

	$title = 'admin_page';
	include 'maket_inc.php';

}

// удаление
function delAdmin_page($link)
{
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$query = "DELETE FROM dota_pages WHERE id = $id";
		$result = mysqli_query($link,$query) or die(mysqli_errors($link));
		
	}

}

delAdmin_page($link);
showAdmin_page($link);
