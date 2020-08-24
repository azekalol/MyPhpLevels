<?php 
function createLink($href, $ancor) 
{	// Если мы на index (у нее нет ГЕТ запроса "?page=")    А тут если мы не наглавно, но $href != about
	if ((!isset ($_GET['page']) and $href == "/dvizh/") or (isset($_GET['page']) and $_GET['page'] == $href)) {
		$class = ' class="active"';
	}else {
		$class = '';
	}

	if ($href != '/dvizh/') {
		$hrefPart = '/dvizh/?page=';
	}else {
		$hrefPart = '';
	}

	echo "<a href=\"$hrefPart$href\"$class>$ancor</a>";
}

//createLink("/dvizh/", 'main');
//createLink("/dvizh/?page=about", 'about');
//createLink("/dvizh/?page=contacts", 'contacts');

// Подключение наших страниц через БД
$query = "SELECT * FROM pages WHERE url!='404'";
$result = mysqli_query($link,$query) or die(mysqli_query($link));
for($data = [];$row = mysqli_fetch_assoc($result); $data[] = $row);
foreach ($data as $page) {
	createLink($page['url'], $page['text']);
}
