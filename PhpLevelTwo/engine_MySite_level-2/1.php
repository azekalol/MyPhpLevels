<?php 

session_start();

if (isset($_SESSION['auth']) and !empty($_SESSION['name'])) {

	echo 'Приветствую Вас'.' '.$_SESSION['name'].'-'.$_SESSION['id'], '<br><br>';
	echo "<a href=\"logout.php\">Выйти</a>";
}else {
	echo "Вы не авторизованы, передите на страницу, <a href=\"login.php\">Авторизации</a>";
}
?>


