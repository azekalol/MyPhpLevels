<?php
//1
function sum($a,$b){
	return $a + $b;
}
echo sum(10,3);
//2
function result($a,$b,$c){
	return ($a - $b)/$c;
}
echo result(15,5,2);
//3
function week($day){
	$arr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
	return $arr[$day - 1];
}
echo week(1);
//4
$arr = [];
function arrayFill($a,$b){
	for ($i=0; $i<$b; $i++) {
		$arr[$i]=$a;
	}return $arr;
}
var_dump(arrayFill('x',5));
//5
$arr = ['1','2','3','4','5','6','7'];
$count = [];
for ($i=0; $i < 10 ; $i++) {
	$arr[$i] .= $count[];
} var_dump($count);
?>
