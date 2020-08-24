<?php 

ini_set('display_errors','on');

$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'test1';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_errors($link));
mysqli_query($link, "SET NAMES 'utf8'");

include 'elems/header.php';

if (isset($_GET['product'])) {
	$product = $_GET['product'];

	$query = "SELECT products.id, products.name, products.price, products.number, products.category_id 
	FROM products
	LEFT JOIN category ON category.id = products.category_id WHERE products.id = $product";
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

<div class="about-product">
		<div class="about-product-card">
		<img src="elems/img/banana.jpg" alt="" class="fone">
		<div class="data">
			<a href="" class="sub_category"><?php echo $product[0]['name'] ?></a>
			<span>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore asperiores in saepe necessitatibus eius exercitationem illo, repellendus tenetur sequi ratione accusantium quasi quae, quia voluptate! Reiciendis architecto dignissimos magni amet?
			</span>
			<div class="tong"></div>
		</div>
	</div>
</div>