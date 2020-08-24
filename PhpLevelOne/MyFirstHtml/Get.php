<?php 
$arr = ['1','2','3','4','5'];

if (isset($_GET['get'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href=<?php echo $arr[$_GET['get']];?>>ссылка1</a>
<?php } ?>
</body>
</html>