<?php 

function createLink($href,$text)

{
	echo "<a href=\"/zzz/?dota=$href\">$text</a>";
}

$query = "SELECT * FROM dota_pages WHERE url != '404'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data=[];$row = mysqli_fetch_assoc($result); $data[]=$row);

foreach ($data as $dota) {
	createLink($dota['url'], $dota['title']);
}

?>
