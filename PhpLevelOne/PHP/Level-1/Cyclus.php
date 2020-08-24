<?php
//1
$str = "";
for ($i=1; $i <10; $i++) {
	$str.=$i;
}
echo $str;
//2
$str = '';
for ($i=9; $i >0 ; $i--) {
	$str.=$i;
}
echo $str;
//3
$str = '';
for ($i=1; $i <10 ; $i++) {
	$str.= -$i;
}
echo $str."-";*/
//4
$str = '';
for ($i=0; $i <30 ; $i++) {
	$str .="x";
	echo $str."<br>";
}
//5
$str = '';
for ($i=1; $i <10 ; $i++) {
	for ($j=1; $j <= $i ; $j++) {
		echo $i;
	}
	echo '<br>';
}
//6
for ($i=0; $i <10 ; $i++) {
	$str = '';

	for ($j=1; $j <=$i ; $j++) {
		$str .='xx';
	} echo $str.'<br>';
}
//7
$arr = [];
$str = '';
for ($i=0; $i <5; $i++) {
	$str.='x';
	$arr[$i]=$str;
}
var_dump($arr);
//8
$arr = [];
$str = '';
for ($i=1; $i <6 ; $i++) {
  	for ($j=1; $j <=$i ; $j++) {
  		$arr[] =$i;
  	}
  }
  print_r('<pre>');print_r($arr);print_r('</pre>');
//9
function func($val, $num) {
$arr = [];
for($i = 1; $i <= $num; $i++) {
$arr[] = $val;
}
return $arr;
}
print_r(func('x', 7));
//10
$arr = [];
function arrayFill($a,$b){
for ($i=0; $i <$b ; $i++) {
	$arr [] = $a;
}
return $arr;
}
print_r(arrayFill('x', 7));
?>
