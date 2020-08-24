<?php
//1
function num($a,$b){
	if ($a == $b) {
		return "True";
	}else return "False";
}
echo num(3,3);
//2
function num($a,$b){
	return $a == $b;
}
echo num(1,2);
//3
function num($a,$b){
	return ($a + $b) > 10;
}
echo num(3,6);
//4
function num($a,$b){
	if (($a + $b )> 10) {
		return "True";
	}else return "False";
}
echo num(4,6);
//5
function num($a){
	return $a > 0;
}
echo num(-1);
//6
function num($a){
	if ($a > 0) {
		return "True";
	}else return "False";
}
echo num(2);
