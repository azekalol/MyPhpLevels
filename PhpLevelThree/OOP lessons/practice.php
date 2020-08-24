<?php 

/*class Tag
{	
	//модификатор	// свойство name
	private $name; 
	private $atr;
	private $text;
	// метод констракт			//параметры метода
	public function __construct($name,$atr = [],$text)
	{	

		$this -> name = $name;
		$this -> atr = $atr;
		$this -> text = $text;
	}


	public function addClass($className)
	{
		if (isset($this-> atr['class'])) {
			$classNames = explode(' ',$this -> atr['class']);
			if (!in_array($className, $classNames)) {
				$classNames[] = $className;
				$this -> atr['class'] = implode(' ', $classNames);
			}
		}else {
			$this -> atr['class'] = $className;
		}
		return $this;
	}

	public function removeClass($className)
	{
		if (isset($this-> atr['class'])) {
			$classNames = explode(' ',$this -> atr['class']);

			if (in_array($className, $classNames)) {
				$classNames = $this -> removeElem($className,$classNames);
				$this -> atr['class'] = implode(' ', $classNames);
			}
		}
		return $this;
	}
	
	public function setAtr($name,$value = true)
	{
		$this -> atr[$name] = $value;
		return $this;
	}

	
	public function setAtrs($atr)
	{
		foreach ($atr as $name => $value) {
			$this -> setAtr($name,$value);
		}
		return $this;
	}

	
	public function removeAtr($name)
	{
		unset($this -> atr[$name]);
		return $this;
	}
	
	public function open()
	{
		$name = $this -> name;
		$atrStr = $this ->getAtrStr($this -> atr);
		return "<$name$atrStr>";
	}
	
	public function close()
	{
		$name = $this -> name;
		return "</$name>";
	}

	public function getName()
	{
		return $this -> name;
	}
	public function getText()
	{
		return $this -> text;
	}

	public function getAtrs()
	{
		return $this -> atr;
	}
	public function getAtr($name,$value = null)
	{
		return $this -> atr[$name] = $value;
	}


	private function getAtrStr($atr)
	{	
		if (!empty($atr)) {
			$result = '';
		
		foreach ($atr as $name => $value) {
			if ($value === true) {
				$result .= "$name";
			}else{
				$result .= "$name=\"$value\"";
			}
		}
		return $result;
	}else return '';
	}

	private function removeElem($elem,$arr)
	{
		$key = array_search($elem, $arr);// найдем ключ элемента по его тексту.
		array_splice($arr,$key,1); //удаляем элемент
		return $arr; 
	}
}*/

/*interface iTag
{
	// Геттер имени:
	public function getName();
	
	// Геттер текста:
	public function getText();
	
	// Геттер всех атрибутов:
	public function getAttrs();
	
	// Геттер одного атрибута по имени:
	public function getAttr($name);
	
	// Открывающий тег, текст и закрывающий тег:
	public function show();
	
	// Открывающий тег:
	public function open();
	
	// Закрывающий тег:
	public function close();
	
	// Установка текста:
	public function setText($text);
	
	// Установка атрибута:
	public function setAttr($name, $value = true);
	
	// Установка атрибутов:
	public function setAttrs($attrs);
	
	// Удаление атрибута:
	public function removeAttr($name);
	
	// Установка класса:
	public function addClass($className);
	
	// Удаление класса:
	public function removeClass($className);
}

class Tag implements iTag
{
	private $name;
	private $attrs = [];
	private $text = '';
	
	public function __construct($name)
	{
		$this-> name = $name;
	}
	
	public function getName()
	{
		return $this-> name;
	}
	
	public function getText()
	{
		return $this-> text;
	}
	
	public function getAttrs()
	{
		return $this-> attrs;
	}
	
	public function getAttr($name)
	{
		if (isset($this-> attrs[$name])) {
			return $this-> attrs[$name];
		} else {
			return null;
		}
	}
	
	public function show()
	{
		return $this->open() . $this-> text . $this->close();
	}
	
	public function open()
	{
		$name = $this-> name;
		$attrsStr = $this->getAttrsStr($this-> attrs);
		
		return "<$name$attrsStr>";
	}
	
	public function close()
	{
		$name = $this-> name;
		return "</$name>";
	}
	
	public function setText($text)
	{
		$this-> text = $text;
		return $this;
	}
	
	public function setAttr($name, $value = true)
	{
		$this-> attrs[$name] = $value;
		return $this;
	}
	
	public function setAttrs($attrs)
	{
		foreach ($attrs as $name => $value) {
			$this->setAttr($name, $value);
		}
		
		return $this;
	}
	
	public function removeAttr($name)
	{
		unset($this-> attrs[$name]);
		return $this;
	}
	
	public function addClass($className)
	{
		if (isset($this-> attrs['class'])) {
			$classNames = explode(' ', $this->attrs['class']);
			
			if (!in_array($className, $classNames)) {
				$classNames[] = $className;
				$this->attrs['class'] = implode(' ', $classNames);
			}
		} else {
			$this->attrs['class'] = $className;
		}
		
		return $this;
	}
	
	public function removeClass($className)
	{
		if (isset($this->attrs['class'])) {
			$classNames = explode(' ', $this->attrs['class']);
			
			if (in_array($className, $classNames)) {
				$classNames = $this->removeElem($className, $classNames);
				$this->attrs['class'] = implode(' ', $classNames);
			}
		}
		
		return $this;
	}
	
	private function getAttrsStr($attrs)
	{
		if (!empty($attrs)) {
			$result = '';
			
			foreach ($attrs as $name => $value) {
				if ($value === true) {
					$result .= " $name";
				} else {
					$result .= " $name=\"$value\"";
				}
			}
			
			return $result;
		} else {
			return '';
		}
	}
	
	private function removeElem($elem, $arr)
	{
		$key = array_search($elem, $arr);
		array_splice($arr, $key, 1);
		
		return $arr;
	}
}*/


/*class Image extends Tag
{
	public function __construct()
	{	
		$this -> setAttr('src','');
		$this -> setAttr('alt','');
		parent:: __construct('img');
	}

	public function __toString()
	{
		return parent::open();
	}
}*/

/*class Link extends Tag
{
	public function __construct()
	{
		$this -> setAttr('href','');
		parent::__construct('a');
	}
}*/

/*class HtmlList extends Tag
{	
	private $items = []; //Массив данных

	public function addItem(ListItem $li) // метод добавления Ли
	{
		$this -> items[] = $li; // он тоже в массиве???
		return $this; //для цепочки
	}
	
	public function show()
	{
		$result = $this -> open(); // сначала открываем
		
		foreach ($this -> items as $item) { // в промежутке достаем данные из массива и покажи
			$result .= $item -> show();
		}

		$result .= $this -> close(); // закрываем
		return $result;
	}

	public function __toString()
	{
		return parent::show();
	}
}

class ListItem extends Tag
{
	public function __construct()
	{
		parent::__construct('li');
	}
}

class Ul extends HtmlList
{

}*/

/*class Form extends Tag
{	
	public function __construct()
	{
		parent::__construct('form');
	}
}

class Input extends Tag
{
	public function __construct()
	{
		parent::__construct('Input');
	}

	public function open()
	{
		$inputName = $this -> getAttr('name');
		if ($inputName) {
			if (isset($_REQUEST[$inputName])) {
				$value = $_REQUEST[$inputName];
				$this -> setAttr('value',$value);
			}
		}

		return parent::open();
	}

	public function __toString()
	{
		return $this -> open();
	}
}

class Submit extends Input
{
	public function __construct()
	{
		$this -> setAttr('type','submit');
		parent::__construct();
	}
}

class Password extends Input
{
	public function __construct()
	{
		$this -> setAttr('name','passw');
		parent::__construct();
	}
}

class Hidden extends Input
{
	public function __construct()
	{
		$this -> setAttr('name','id');
		parent::__construct();
	}
}

class Textarea extends Tag
{
	public function __construct()
	{
		parent::__construct('Textarea');
	}

	public function __toString()
	{
		return parent::show();
	}
}*/

/*class TagHelper
{
	public function show($name,$text)
	{
		return $this -> open($name)."$text". $this -> close($name);
	}
	public function open($name,$attrs=[])
	{
		$attrsStr = $this -> getAttrsStr($attrs);
		return "<$name$attrsStr>";
	}
	public function close($name)
	{
		return "</$name>";
	}

	private function getAttrsStr($attrs)
	{
		if (!empty($attrs)) {
			$result ='';
			foreach ($attrs as $name => $value) {
				if ($value === true) {
					$result .=" $name";
				}else{
					$result .= " $name=\"$value\"";
				}
			}
			return $result;
		}else {
			return '';
		}
	}
}

class FormHelper extends TagHelper
{
	public function openForm($attrs = [])
	{
		return $this -> open('form',$attrs);
	}

	public function closeForm()
	{
		return $this -> close('form');
	}

	public function input($attrs = [])
	{
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
			if (isset($_REQUEST['name'])) {
				$attrs['value'] = $_REQUEST[$name];
			}
		}
		return $this -> open('input',$attrs);
	}

	public function password($attrs = [])
	{
		$attrs['type'] = 'password';
		return $this -> input($attrs);
	}

	public function hidden($attrs = [])
	{
		$attrs['type'] = 'hidden';
		return $this -> open('input',$attrs);
	}

	public function submit($attrs = [])
	{
		$attrs['type'] = 'submit';
		return $this->open('input', $attrs);
	}
		
	public function checkbox($attrs = [])
	{
		$attrs['type'] = 'checkbox';
		$attrs['value'] = 1;
			
		if (isset($attrs['name'])) {
			$name = $attrs['name'];
				
			if (isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
				$attrs['checked'] = true;
			}
				
			$hidden = $this->hidden(['name' => $name, 'value' => '0']);
			} else {
				$hidden = '';
			}			

			return $hidden . $this->open('input', $attrs);
	}

}*/

/*class CookieShell
{	
	private $name;
	private $value;
	private $time;

	public function set($name,$value,$time)
	{	
		$this -> name = $name;
		$this -> value = $value;
		$this -> time = $time;
		setcookie($name,$value,$time);
		$_COOKIE['name'] = 'value';
	}

	public function get($name)
	{
		return $this -> value;
	}

	public function remove($name)
	{	
		unset($_COOKIE['name']);
		setcookie($name,time());
	}
}*/


/*class CookieShell
{
	public function set($name, $value, $time = 0)
	{
		if($time) {
		$timeCookie = time() + $time; // $time задает время в сек, через сколько кука умрет
		} else {
		$timeCookie = 0;
		}
		setcookie($name, $value, $timeCookie); // устанавливает куки
		$_COOKIE[$name] = $value; // принудительно запишем в массив
	}

public function get($name)
{
return $_COOKIE[$name]; // получает куки
}

public function del($name) // удаляет куки
{
unset($_COOKIE[$name]);
setcookie($name, '', time());
}

public function exists($name) // проверяет наличие куки
{
if(isset($_COOKIE[$name])) {
$str = 'Массив $_COOKIE[' . $name . "] = $_COOKIE[$name] существует.";
} else {
$str = 'Массив $_COOKIE[' . $name . '] НЕ существует.';
}
return $str;
}
} */

/*class SessionShell
{	
	//Стартуем сессию
	public function __construct()
	{	

		if (!isset($_SESSION)) {
			session_start();
		}
	}

	// Установим переменную сессии
	public function set($name,$value)
	{
		$_SESSION[$name] = $value;
	}
	// Получим переменную 
	public function get($name)
	{
		return $_SESSION[$name];
	}

	//Удалим переменную
	public function del($name)
	{
		unset($_SESSION[$name]);
	}
	// проверка переменной
	public function exists($name)
	{
		return (isset($_SESSION[$name]));
	}
	// разрушаем сессию
	public function destroy($name)
	{
		session_destroy();
	}
}*/

/*class FileManipulator
{
	public function create($filePath)
	{
		return file_put_contents($filePath,$text='');
	}

	public function delete($filePath)
	{
		return unlink($filePath);
	}

	public function copy($filePath,$copyPath)
	{
		return copy($filePath, $copyPath);
	}

	public function rename($filePath,$newName)
	{
		return rename($filePath, $newName);
	}

	public function replace($filePath,$newPath)
	{
		return $this -> rename($filePath, $newPath);
	}

	public function size($filePath)
	{
		return filesize($filePath);
	}
}*/

/*Задача:
"Реализуйте описанный класс Validator. Проверьте его работу."

class Validator
{
public function isEmail($str) // проверяет строку на то, что она корректный email
{
return preg_match('#^[\w-.]+@[a-z]+\.[a-z]{2,3}$#', $str);
}

public function isDomain($str) // проверяет строку на то, что она корректное имя домена
{
$result = 'Доменное имя некорректно.';

if($this->isEmail($str)) {
$nameDomen = preg_replace('#^([\w-.]+)@[a-z]+\.[a-z]{2,3}$#', '$1', $str);
$result = "Доменное имя '$nameDomen' корректно.";
}
return $result;
}

public function inRange($num, $from, $to) // проверяет число на то, что оно входит в диапазон
{
$str = "Число '$num' не входит в диапазон '$from - $to'.";

if($num > $from && $num < $to) {
$str = "Число '$num' входит в диапазон '$from - $to'.";
}
return $str;
}

public function inLength($str, $from, $to) // проверяет строку на то, что ее длина входит в диапазон
{
$num = strlen($str);
$res = "Длина строки '$str' не входит в диапазон '$from - $to'.";

if($num > $from && $num < $to) {
$res = "Длина строки '$str' входит в диапазон '$from - $to'.";
}
return $res;
}
}*/

/*
Задача:
"Реализуйте описанный класс DatabaseShell. Проверьте его работу."

class DatabaseShell
{
private $link;

public function __construct($host, $user, $password, $database)
{
$this->link = mysqli_connect($host, $user, $password, $database);
mysqli_query($this->link, "SET NAMES 'utf8'"); // устанавливаем кодировку
}

public function save($table, $data) // сохраняет запись в базу
{
$str = '';

foreach($data as $key => $elem) {
$str .= "$key='$elem', ";
}
$str = rtrim($str, ', ');
$query = "INSERT INTO $table SET $str";
$this->querySending($query);
}

public function del($table, $id) // удаляет запись по ее id
{
$query = "DELETE FROM $table WHERE id=$id";
$this->querySending($query);
}

public function delAll($table, $ids) // удаляет записи по их id
{
$strIds = implode(',', $ids);
$query = "DELETE FROM $table WHERE id IN($strIds)";
$this->querySending($query);
}

public function get($table, $id) // получает одну запись по ее id
{
$query = "SELECT * FROM $table WHERE id=$id";
$result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));
$row = mysqli_fetch_assoc($result);
$str = '';

foreach($row as $key => $elem) {
$str .= "$key - $elem, ";
}
$str = rtrim($str, ', ');
return $str;
}

public function getAll($table, $ids) // получает массив записей по их id
{
$str = '';

foreach($ids as $id) {
$str .= $this->get($table, $id) . '<br>';
}
return $str;
}

public function selectAll($table, $condition) // получает массив записей по условию
{
$query = "SELECT * FROM $table $condition";
$result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
$str = '';

foreach($data as $row) {

foreach($row as $key => $elem) {
$str .= "$key='$elem', ";
}
$str = rtrim($str, ', ') . '<br>';
}
return $str;
}

private function querySending($query) // удаляет запись по ее id
{
mysqli_query($this->link, $query) or die(mysqli_error($this->link));
}
}*/


?>