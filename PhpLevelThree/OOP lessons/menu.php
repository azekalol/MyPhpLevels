<?php 

require_once 'forMenu.php';
echo (new Link()) ->setAttr('href','menu_link.php') -> setText('index')-> show().'<br>';
echo (new Link()) ->setAttr('href','menu_news.php')-> setText('news')-> show().'<br>';
echo (new Link()) ->setAttr('href','menu_image.php')-> setText('image')-> show().'<br>';
echo (new Link()) -> setText('login')-> show().'<br>';
echo (new Link()) -> setText('registration')-> show();

?>