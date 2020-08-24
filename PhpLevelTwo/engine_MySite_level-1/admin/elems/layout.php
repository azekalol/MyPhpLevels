<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title><?= $title ?></title>
</head>
<body>
	<header>
		<a href="/dvizh/admin/add.php">add new page</a>
		<a href="/dvizh/admin/logout.php">logout</a>
	</header>
	<main>
		<?php include 'elems/info.php'; ?>
		<?= $content ?>
	</main>
	<footer>
		footer
	</footer>
</body>
</html>