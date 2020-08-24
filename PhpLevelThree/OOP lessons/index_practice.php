<?php 
require_once 'practice.php';

/*$tag3 = new Tag('header');
echo $tag3 -> open().'header сайта';

$tag1 = new Tag('div');
echo $tag1 -> open().'text'.$tag1 -> close();

$tag2 = new Tag('img');
echo $tag2 -> open().'image';*/

/*$tag = new Tag('input',['id'=> 'test','class'=> 'eee bbb']);
echo $tag -> open();*/

/*$tag = new Tag('input');
echo $tag->setAtr('id', 'test')->setAtr('class', 'eee bbb')->removeAtr('class')->open();*/

/*$tag = new Tag('input');
echo $tag -> setAtrs(['id'=>'test','class'=>'aaa'])->open();*/

/*$tag = new Tag('input');
echo $tag -> setAtr('id','test')->setAtr('disabled',true)-> open();*/

//echo (new Tag('input'))->setAtr('name1','name')->setAtr('name','name1')->open();

//echo (new Tag('input'))->addClass('eee')->open();
//echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open();
//echo (new Tag('input'))->setAtr('class', 'eee bbb')->addClass('kkk')->open();
//echo (new Tag('input'))->setAtr('class', 'eee bbb')->addClass('eee')->open();

/*echo (new Tag('input'))
		->setAtr('class', 'eee zzz kkk') // добавим 3 класса
		->removeClass('zzz') // удалим класс 'zzz'
		->open(); // выведет <input class="eee kkk">*/


//$image = new Image();

//$image -> setAttr('width','300')-> setAttr('height','200');
//echo $image ->setAttr('src', '4519.jpg')-> open();
//$image -> setAttr('src', '4519.jpg') -> setAttr('width','500') -> setAttr('height','300');
//echo $image;

/*echo (new Link()) -> setText('index')-> show().'<br>';
echo (new Link()) -> setText('news')-> show().'<br>';
echo (new Link()) -> setText('image')-> show().'<br>';
echo (new Link()) -> setText('login')-> show().'<br>';
echo (new Link()) -> setText('registration')-> show();*/

/*$list = new HtmlList('ul');
	echo $list
	-> addItem((new ListItem()) -> setText('item1') -> setAttr('class','first'))
	-> addItem((new ListItem()) -> setText('item2'))
	-> addItem((new ListItem()) -> setText('item1'))
	-> show();*/

/*$ul = new Ul('ol');

	echo $ul
	-> addItem((new ListItem()) -> setText('item1') -> setAttr('class','first'))
	-> addItem((new ListItem()) -> setText('item2'))
	-> addItem((new ListItem()) -> setText('item1'))
	-> show();*/

/*$form = new Form();
$form -> setAttrs(['action' => '','method'=>'GET']);
echo $form -> open();
echo(new Input()) -> setAttr('name','year');
echo (new Input()) -> setAttr('type','submit');
echo $form -> close();

echo (new Input)
	->setAttr('name', 'year')
	->setAttr('value', date('Y'));*/

/*$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
echo $form->open();
		echo (new Input)->setAttr('name', 'year');
		echo (new Input)->setAttr('type', 'submit');
		echo (new Input)->setAttr('name', 'year');
		echo (new Input)->setAttr('type', 'submit');
echo $form->close();*/

/*$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	
echo $form->open();
	//echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '123');
	echo (new Input)->setAttr('name', 'login').'<br>'.'<br>';
	echo (new Password())-> setAttr('name','passw').'<br>'.'<br>';
	echo (new Textarea())-> setAttr('name','message')->setText('asd').'<br>';
	echo new Submit;
echo $form->close();*/

//$th = new TagHelper();
//echo $th->open('div') . 'text' . $th->close('div'); // <div>text</div>

	/*$th = new TagHelper();
	/*echo $th->open('form', ['action' => 'test.php', 'method' => 'GET']);
	echo $th->open('input', ['name' => 'year']);
	echo $th->open('input', ['type' => 'submit']);
	echo $th->close('form');*/
	//echo $th -> show('div','Lorem');

/*$fh = new FormHelper();
	
echo $fh->openForm(['action' => '', 'method' => 'GET']);
	echo $fh->input(['name' => 'year']);
	echo $fh->checkbox(['name' => 'check']);
	echo $fh->submit();
echo $fh->closeForm();*/

/*$csh = new CookieShell();
$csh -> set('lol','6',1);
// $csh -> del('lol');
echo $csh -> get('lol');*/

/*$ses = new SessionShell;
$ses -> set('test','Тест');
$ses -> del('test');
$ses -> destroy();
echo $ses -> get('test');*/

//$FM = new FileManipulator();
//$FM->create('text.php');
//$FM->delete('text.php');
//$FM->replace('new.php', 'assets/new.php');
//echo $FM->size('text.php');


?>