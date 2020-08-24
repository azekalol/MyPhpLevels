<?php
//1
//Работа со степенью и корнем!!!
$arr = ['4','2','5','19','13','0','19'];
$sum = 0;
foreach ($arr as $num) {
	$sum = $sum + $num;
}echo sqrt(pow($sum,2));

//2
//Работа с функциями округления
$a = 379;
echo sqrt($a).'<br/>';
//Округление по матем. законам
echo round(sqrt($a)).'<br/>';

//3
//Округление до десятых, сотых
echo round(sqrt($a),1).'<br/>';
echo round(sqrt($a),2).'<br/>';
//Округление в меньшую сторону
echo floor(sqrt($a)).'<br/>';
//Округление в большую строну
echo ceil(sqrt($a));*/

//4
$a = 587;
echo sqrt($a)."<br/>";
echo floor(sqrt($a))."<br/>";
echo ceil(sqrt($a))."<br/>";
$arr = ['floor' =>'24', 'ceil' => '25' ];
var_dump($arr);

//5
//Работа с min и max
$arr = ['4','-2','5','19','-130','0','10'];
echo min($arr).'<br/>';
echo max($arr);

//6
//Работа с рандомом
echo mt_rand(1,100);
//ПЗДЦ задачка блеать***!Решил оставить этот комент,все таки мои эмоции=)
$arr = [];
for ($i=1; $i < 11 ; $i++) {
	$arr [] = mt_rand(1,100);
}var_dump($arr);

//7
//Работа с модулем
$a = 10;
$b = 25;
echo abs($a - $b);

//8
$arr = ['1','2','-1','-2','3','-3'];
$arr[2] = abs($arr[2]);
$arr[3] = abs($arr[3]);
$arr[5] = abs($arr[5]);
var_dump($arr);

//9
$a = 30;
for ($i=1; $i <= 30 ; $i++) {
	if ($a % $i ==0) {
		$arr[] = $i;
	}
}var_dump($arr);
