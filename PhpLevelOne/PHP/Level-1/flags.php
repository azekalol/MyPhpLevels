<?php
//1
$arr = ['a', 'b','d', 'e',];

	foreach ($arr as $elem) {
		if ($elem == 'c') {
			echo 'Есть'."<br/>";
		}else {echo "Нет";}
	}
//2
$arr = ['a', 'b','d','e'];
$flag = "false";
foreach ($arr as $elem) {
		if ($elem == 'c') {
			$flag = "true"; //элемент есть - переопределим переменную $flag
			break;
		}
	}
	echo $flag;
//3
$arr = ['1','2','3','4','5','6','7'];
$flag = false;
foreach ($arr as $key) {
	if ($key == '8') {
		$flag = true;
		break;
	}
}
	if ($flag === true) {
		echo 'Есть';
	} else {
		echo 'Нет';
	}
//4
$num = 31;
$arr = range(2,30);
$flag = false;
foreach ($arr as $key) {
	if ($num % $key == 0) {
		$flag = true;
		break;
	}
}
	if ($flag === true) {
		echo 'Есть';
	} else {
		echo 'Нет';
	}
