<?php 

require_once 'practice.php';

class Link extends Tag
{
	public function __construct()
	{
		$this -> setAttr('href','');
		parent::__construct('a');
	}

	public function open()
	{
		$this -> activateSelf();// вызываем активацю
		return parent::open();// вызываем метод родителя
	}

	private function activateSelf()
	{	
		//URL сайта можно достать с помощью $_SERVER['REQUEST_URI']
		//if ($this -> getAttr('href') == $_SERVER(['REQUEST_URI'])) { 
		//	$this -> addClass('active');
		//}
	}
}

?>