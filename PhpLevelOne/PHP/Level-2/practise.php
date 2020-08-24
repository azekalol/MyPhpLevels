<?php
//1
for ($i=1; $i <=100; $i++) {
	echo $i.'<br/>';
}
//2
for ($i=1; $i <=100; $i++) {
	if (is_int($i/2)) {
		echo $i.'<br/>';
	}
}
//3
$result = 0;
for ($i=1; $i <100; $i++) {
	$result +=$i;
}echo $result;
//4
$result = 0;
for ($i=1; $i <15; $i++) {
	$result += $i*$i;
}echo $result;
//4
$result = 0;
for ($i=1; $i <15; $i++) {
	$result +=sqrt($i);
}echo round($result,2);
//5
$result = 0;
for ($i=1; $i <100; $i++) {
	if ($i % 7==0) {
		$result +=$i;
	}
}echo $result;
//6
$arr = [];
for ($i=1; $i <=10; $i++) {
	$arr[] = $i;
}var_dump (array_reverse($arr));

// Правильнее будет так
/*$arr = [];
for ($i=10; $i > 0; $i--) {
	$arr[] = $i;
}
var_dump($arr);*/
//7
$arr = [];
for ($i=1; $i <10; $i++) {
	$arr[] =mt_rand(1,10);
}var_dump($arr);
//8
$str = '';
$result = [];
for ($i=1; $i <=6; $i++) {
	$str .= rand(1,9);
}
var_dump ($str);
//9
$arr = [1,2,3,4,5,6,7,9];
$result = 0;
foreach ($arr as $key) {
	$result += $key;
}echo $result;
//10
$arr = [1,2,3,4];
$result = 0;
foreach ($arr as $key) {
	$result += $key*$key;
}echo $result;
//11
$arr = [1,2,3,4,5,6,7];
$result = 0;
foreach ($arr as $key) {
	$result +=sqrt($key);
}echo round($result);
//12
$arr =[9,11,14,7,4,25,36,10];
$result = 0;
foreach ($arr as $key) {
	if (0< $key && $key <10) {
		$result += $key;
	}
}echo $result;
//13
$arr = [1,2,3,4,5,6,7,0];
$result = 0;
for ($i=1; $i <$arr; $i++) {
	if ($arr[$i] == $arr[$i-1]) {
		$result = $arr[$i];
		break;
	}
}
if ($result == $arr[$i-1]) {
	return "True";
}else return "False";
//14
$str = '';
for ($i=1; $i <10; $i++) {
	for ($j=1; $j <=$i; $j++) {
		$str.=$i;
	}
}echo $str;
//15
$arr = [
	0=>['name'=>'Коля', 'salary'=>300],
	1=>['name'=>'Вася', 'salary'=>400],
	2=>['name'=>'Петя', 'salary'=>500],
];
foreach ($arr as $elem) {
	echo $elem['name']. '-' .$elem['salary'].'<br>';
}*/
//16
$arr = [];
for ($i=0; $i <10; $i++) {
	for ($j=0; $j <10; $j++) {
		$arr[$i][] =mt_rand(1,10);
	}
}print_r('<pre>');print_r($arr);print_r('<pre/>');
//17
function str($a){
	$first = '';
	$second = '';
	$first = substr($a,0,1);
	$second = substr($a,1);
	echo strtoupper($first).''.$second;
}str('hello');
//18
function str_rev($a){
	$arr = [];
	$str = '';
	$arr = str_split($a);
	$str = implode('',array_reverse($arr));
	echo $str;
}str_rev('HELLO');
//19
function str_rev($a){
	$str = '';
	$str1 = strlen($a);
	for ($i=$str1; $i >=1; $i--) {
		$str.=substr($a, $i-1,1);
	}echo $str;
}str_rev('Hello');
//20
function str_len($a){
	$str =count(str_split($a));
	echo $str;
}str_len('moon');
//21
function str($a){
	$arr = [];
	$arr = str_split($a);
	$str1 = '';
	foreach ($arr as $elem) {
		if (ord($elem) >=97 && ord($elem) <=122) {
			$str1 .= strtoupper($elem);
		}else $str1 .=strtolower($elem);
	}echo $str1;
}str('HELLO');
//22
function str($a){
	$arr=[];
	$str1 ='';
	$arr = explode('_',$a);
	foreach ($arr as $elem) {
		if ($elem == $arr[0]) {
			$str1 .= $elem;
		}else $str1.=ucfirst($elem);
	}echo $str1;
}str('var_vare_vare');
//23
for ($i=1; $i <10; $i++) {
	echo str_repeat($i, $i).'<br/>';
}
//24
$str = 'xxxxx';
for ($i=5; $i>1; $i--) {
	echo str_repeat($str, $str).'<br/>';
}
