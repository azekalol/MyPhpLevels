<?php

$arr = [
['href'=>'1.html','text'=>'ссылка 1'],
['href'=>'2.html','text'=>'ссылка 2'],
['href'=>'3.html','text'=>'ссылка 3'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
<?php for ($i=0; $i < count($arr); $i++) { ?>
	
	<li><a href=<?php echo($arr[$i]['href'])?>><?php echo($arr[$i]['text'])?></a></li>
	
<?php }?>
	</ul>
</body>
</html>