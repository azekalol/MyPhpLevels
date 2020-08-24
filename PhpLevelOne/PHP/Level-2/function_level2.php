<?php
//1
$arr = [1, 2, 3, -1, -2, -3];
function isNumberInRange($a){
	if (0 <$a &&  $a< 10) {
		return true;
	}else {
		return false;
	}
}
//echo isNumberInRange(1);

$newarr = [];
foreach ($arr as $elem) {
	if (isNumberInRange($elem)) {
		$newarr[] = $elem;
	}
}
print_r('<pre>');print_r($newarr);print_r('</pre>');

//2
function getDigitSum($a){
	if ($a < 10) {
		return $a;
	}else return array_sum (str_split($a));
}echo getDigitSum('11');

//3
$arr = ['1','2','3','5','6','7','8'];
function isEven($a){
	if ($a % 2 == 0) {
		return True;
	}else return False;
} echo isEven(7);

$newarr = [];
foreach ($arr as $elem) {
	if (isEven($elem)) {
		$newarr[] = $elem;
	}
}print_r('<pre>');print_r($newarr);print_r('</pre>');

//4
function getDivisors($a){
	for ($i=1; $i <=$a; $i++) {
		if ($a % $i ==0) {
			$arr[] = $i;
		}
	}return $arr;
}
function getCommonDivisors($x,$y){
	return array_intersect(getDivisors(2), getDivisors(5));
}

//5
var_dump(getCommonDivisors(2, 5));

function getCommonDivisors($num1, $num2) {
return array_intersect(getDivisors($num1), getDivisors($num2));
}

function getDivisors($num) {
for ($i = 1; $i < $num; $i++) {
if ($num % $i == 0) {
$arr[] = $i;
}
}
return $arr;
}

//6
function etrans($str){
	$arr = ['Яблоко'=>'Apple','Банан'=>'Banana','Красный'=>'Red','Желтый'=>'Yellow','Синий'=>'Blue','Машина'=>'Car',
	'Город'=>'City','Дом'=>'House','Мама' => 'Mother'];
	foreach ($arr as $key => $value) {
		return strtr($str,$arr);
	}
}echo etrans('Мама');

//7
function apple($a,$x,$y,$z){
	switch ($a) {
		case '1':
			echo $x;
			break;
		case '2':
			echo $y;
			break;
		default:
			echo $z;
			break;
	}
}print_r(apple(0,'Яблоко','Яблока','Яблок'));

//8
function apple($a,$x,$y,$z){
	if (1 <= $a and $a < 2) {
		return $x;
	}
	if (2 <= $a and $a < 3) {
		return $y;
	}
	if ($a > 2) {
		return $z;
	}
}print_r(apple(2,'Яблоко','Яблока','Яблок'));

//9
function apple($a){
$arr = ['1' => 'Яблоко','2' => 'Яблока','3' => 'Яблок'];
	foreach ($arr as $key => $value) {
		return strtr($a,$arr);
	}
}print_r(apple(4));

//10
function ticket_number($xxx){
	$arr = str_split($xxx);
	$tickets = array_sum(array_splice($arr,0,3));
	$tickets1 = array_sum(array_splice($arr,0,3));
	var_dump($tickets);
	var_dump($tickets1);
	if ($tickets == $tickets1) {
		return "Happy ticket";
	}else return "You lose";

} print_r(ticket_number('2222221111'));

//11
$array = [];
for ($j = 1; $j < 1000; $j++){
if (Friendly_number($j) == true)
$array1[] = Friendly_number($j);
}
print_r('<pre>');print_r($array1);

function Friendly_number($num){
	$arr = [];
	for ($i=1; $i <$num; $i++) {
		if ($num % $i ==0) {
			$arr[] += $i;
		}
	}
	$count = array_sum($arr);

	$arr2 = [];
	for ($i=1; $i <$count; $i++) {
		if ($count % $i == 0) {
			$arr2[] += $i;
		}
	}
	$count2 = array_sum($arr2);
	if ($num == $count2) {
		$array[] = $count2.' '.$count;
		return $array;
	}
} echo '<br><br>';

//12
$array = [];
for ($j = 1; $j < 100; $j++){
if (friends($j) != false)
$array1[] = friends($j);
}
print_r('<pre>');print_r($array1);

function friends($num) {
$arr = [];
for ($i = 1; $i < $num; $i++){
if (is_int($num / $i)) {
$arr[] += $i;
}
}
$count = array_sum($arr);

$arr2 = [];
for ($i = 1; $i < $count; $i++){
if (is_int($count / $i)) {
$arr2[] += $i;
}
}
$count2 = array_sum($arr2);

if ($num == $count2) {
$array[] = $count2.' '.$count;
return $array;
}

}
echo '<br><br>';

//13
function friendNumber($x){
	$arr = [];
	for ($i=1; $i <$x; $i++) {
		if (is_int($x/$i)) {
			$arr[] +=$i;
		}
	}

	$count = array_sum($arr);

	$newarr =[];
	for ($i=1; $i <$count; $i++) {
		if (is_int($count/$i)) {
			$newarr[] += $i;
		}
	}
	$count2 = array_sum($newarr);

	if ($x ==$count2) {
		$array[]= $count2.' '.$count;
		return $array;
	}
}

$array = [];
for ($j=1; $j <100; $j++) {
	if (friendNumber($j) !=false) {
		$array[] = friendNumber($j);
	}
}print_r('<pre>');print_r($array);

//14
function cut($str,$x = 10){
	for ($i=0; $i <11; $i++) {
		if (strlen($str) > $x) {
			substr($str ,$x,10);
		}
	}return substr($str ,0,$x);
}print_r(cut('Prikol',5));

//15
function cut($str,$x =10){
	return substr($str,0,$x);
}
print_r(cut('Prikol',1));

//16
$arr = ['1','2','3','4','5','6','7'];
newarr($arr);
function newarr($arr){
	echo array_pop($arr).'<br>';
	if (!empty($arr)) {
		newarr($arr);
	}
};

//17
$number = '999999999999999999999';
SUM($number);
function SUM($number){
	$result = array_sum(str_split($number));
	echo $result.'<br>';
	if ($result > 9) {
		$result = SUM($result);
	}
};
