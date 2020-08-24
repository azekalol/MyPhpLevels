<?php
	$arr = [
		['name'=>'Коля', 'age'=>30, 'salary'=>500],
		['name'=>'Вася', 'age'=>31, 'salary'=>600],
		['name'=>'Петя', 'age'=>32, 'salary'=>700],
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Table</title>
</head>
<body>
	<table>
		<tr>
				<?php for ($i=0; $i < count($arr); $i++) { ?>
			<tr>
			<td><?php echo ($arr[$i]['name']) ?></td>
			<td><?php echo ($arr[$i]['age']) ?></td>
			<td><?php echo ($arr[$i]['salary']) ?></td>
			</tr>
		<?php } ?>
		</tr>
	</table>
</body>
</html>