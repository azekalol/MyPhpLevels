<?php
//1
function translit($str) {
		$tr = [
			"А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
			"Д"=>"D","Е"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
			"Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
			"О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
			"У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
			"Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
			"Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
			"в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
			"з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
			"м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
			"с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
			"ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
			"ы"=>"yi","ь"=>"'","э"=>"e","ю"=>"yu","я"=>"ya",
			" "=>"-","/"=>"-","\\"=>"-",
			"*"=>"-","*"=>"-","\""=>"", "<"=>"-", ">"=>"-",
			"|"=>"-","%"=>"-",","=>"",
			"?"=>"-",":"=>"-","\""=>"-",
		];
		return strtr($str,$tr);
}print_r(translit('Смешно'));

//Пример -1.2.
function translit($text_for_translit){
$arr_rus=['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я',' '];
$arr_lat=['a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','shh','`','y','``','e`','yu','ya',' '];
$arr_translit = array_combine($arr_lat,$arr_rus); // создаем таблицу транлитерации
$n=mb_strlen ($text_for_translit); //определяем длину строки
for ($n_simv=0; $n_simv < $n; ++$n_simv){
$simv=mb_substr ($text_for_translit,$n_simv,1); //берем один символ
$simv_t=array_search ($simv,$arr_translit); //ищем этот символ в таблице транслитерации и возвращаем ключ (транслитерированный символ)
if ($simv_t==false) $simv_t=$simv; // оставляем символы, которын нет в таблице - в том же виде.
$arr_translit_text[]=$simv_t;//добавляем в массив транслитерированный символ)
}
$translit_1=implode($arr_translit_text); // преобразуем массив в строку
return $translit_1;*/

//2
$lang = 'en';
	switch ($lang) {
		case 'ru':
			$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
		break;
		case 'en':
			$arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
		break;
	}
	var_dump($arr);*/
