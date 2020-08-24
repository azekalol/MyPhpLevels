<?php 

ini_set('display_errors','on');

$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'test1';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_errors($link));
mysqli_query($link, "SET NAMES 'utf8'");

include 'elems/header.php';

$query = "SELECT category.id,category.name FROM category
LEFT JOIN products ON category.id = products.id WHERE category.id > 0";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($category=[];$row = mysqli_fetch_assoc($result);$category[]=$row);
//print_r('<pre>');print_r($category);

if (isset($_GET['sub_category'])) {
	$sub_category = $_GET['sub_category'];
		
	$query = "SELECT products.id, products.name, products.price, products.number, products.category_id FROM products
	LEFT JOIN category ON category.id = products.category_id WHERE category.name = $sub_category";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	for($product=[];$row = mysqli_fetch_assoc($result);$product[]=$row);
	//print_r('<pre>');print_r($product);
}
?>

<div class="sidenav">
  <a href="category.php">Фрукты</a>
  <a href="#services">Мясо</a>
  <a href="#clients">Морепродукты</a>
  <a href="#contact">Овощи</a>
</div>

<div class="sub-container">
	<?php
		 for ($j=0; $j <count($product); $j++) {
		 	$id = $product[$j]['id'];
		 	$product_name = $product[$j]['name'];
	?>
	<div class="sub_category-card">
		<img src="elems/img/banana.jpg" alt="" class="fone">
		<div class="data">
			<?php
			echo "<a href=\"product.php?product=$id\" class=\"sub_category-product\">$product_name</a>";
			?>
			<span>В корзину</span>
			<?php
			echo "<a href=\"card.php?card_id=$id\" class=\"card-icon\">
			<img src=\"elems/img/icon-card.png\"class=\"icon-card\" ></a>"; 
			?>
			<div class="tong"></div>
		</div>
	</div>
<?php } ?>
</div>