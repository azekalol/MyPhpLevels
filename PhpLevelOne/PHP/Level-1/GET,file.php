<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
/*
error_reporting(E_ALL);
ini_set('display_errors', 'on');
*/

//1
$arr = ['a','b','c','d'];
if (isset($arr[$_GET['get']])) {
	echo $arr[$_GET['get']];
} else echo "Такого элемента нет."
echo $_GET['get'];
echo '<br>';
for ($i=1; $i <=30; $i++) {
	echo "<ul>
	<li><a href=\"?get=$i\">link $i</a></li>
	</ul>";
}
//2
// File
error_reporting(E_ALL);
ini_set('display_errors', 'on');

 file_put_contents('new.txt', '');

echo file_get_contents('new.txt');

//3
$arr = ['1.txt','2.txt','3.txt'];
for ($i=1; $i <=count($arr); $i++) {
	file_put_contents($i,'1');
}

//4
$text = file_get_contents('text.txt');
file_put_contents('text.txt', $text.'!!!');
//5
$text = file_get_contents('text.txt');
$a = $text * $text;
file_put_contents('text.txt', $a.'');
//6
$i = file_get_contents('count.txt');
$i++;
file_put_contents('count.txt', $i.'');
echo $i;
//7
$arr = ['1.txt','2.txt','3.txt'];
$text = '';
foreach ($arr as $key => $elem) {
	$text = file_get_contents($elem);
}
file_put_contents($elem, $text.'!');
//8
$arr = ['1.txt', '2.txt', '3.txt'];
$fail = '';
foreach ($arr as $elem) {
$fail = file_get_contents($elem);
file_put_contents($elem, $fail . '!');
echo file_get_contents($elem) . '<br>';
}

?>
