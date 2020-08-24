<?php
session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<p>текст для любого пользователя</p>
		<?php
			if (!empty($_SESSION['auth'])) {
				echo 'текст только для авторизованного пользователя';
			}
		?>
		<p>текст для любого пользователя</p>
	</body>
</html>