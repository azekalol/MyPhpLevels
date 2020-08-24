<?php
//1
$arr = ['2','2','3','4','5','6'];
$num =0;
foreach ($arr as $key => $elem) {
	$num +=$elem;
	if ($num > 10) {
		$result = $key + 1;
		echo $result;
		break;
	}
}

//Многомерные массивы
//2
$arr = [['1','2','3'],['4','5'],['7']];
$sumElem = 0;
$sum = 0;
foreach ($arr as $key => $elem) {
	foreach ($elem as $sumElem) {
		$sum +=$sumElem;
	}
}echo $sum;

//3
$arr = [[[1,2,3],[4,5],[7]]];
$sumElem = 0;
$sum = 0;
$subElem = 0;
foreach ($arr as $key => $elem) {
	foreach ($elem as $sumElem) {
		foreach ($sumElem as $sum) {
			$subElem += $sum;
		}
	}
}echo $subElem;

//4
$arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$sumElem = 0;
$subElem = 0;
$sum = 0;
foreach ($arr as $key => $elem) {
	foreach ($elem as $sumElem) {
		foreach ($sumElem as $sum) {
			$subElem += $sum;
		}
	}
}echo $subElem;

//5
$arr = [];
$array = [];
for ($i=1; $i <=3 ; $i++) {
	$arr[] = $i;
	for ($j=1; $j <$i ; $j++) {
		$arr[1] = $array;
	}
}print_r('<pre>');print_r($arr);print_r('</pre>');
print_r('<pre>');print_r($array);print_r('</pre>');
//$arr = [['1','2','3'],['4','5'],['7']];
//print_r('<pre>');print_r($arr);print_r('</pre>');

//6
$a = 1;
for ($i=0; $i< 3; $i++) {
for ($j=0; $j< 3; $j++) {
	$arr[$i][$j] = $a;
	$a++;
}
}print_r('<pre>');print_r($arr);print_r('</pre>');
