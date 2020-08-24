<?php 
ini_set('display_errors','on');

$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'test1';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_errors($link));
mysqli_query($link, "SET NAMES 'utf8'");


include 'elems/header.php';


if (!empty($_GET['card_id'])) {
		$card_id = $_GET['card_id'];
		$query = "SELECT * FROM products WHERE products.id = $card_id";
		$result = mysqli_query($link,$query) or die(mysqli_error($link));
		for($product=[];$row = mysqli_fetch_assoc($result);$product[]=$row);
		//print_r('<pre>');print_r($product);
?>

<h4 class="table-cart">Ваша корзина: </h4>
<div class="add_to_cart">
	<table>
		<td><img src="apple.jpg" alt="" class="apple-img"></td>
		<td><a href=""><?php echo $product[0]['name']; ?></a></td>
		<p>Cумма:<?php echo $product[0]['price'] ?></p>
		<p>Количество товара: <?php echo $product[0]['number'] ?> </p>
	</table>
</div>

<?php 
} 

?>