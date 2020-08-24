<?php 
ini_set('display_errors','on');

$host = 'localhost';
$user = 'admin';
$password = '123';
$db_name = 'test1';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_errors($link));
mysqli_query($link, "SET NAMES 'utf8'");


include 'elems/header.php';

$query = "SELECT category.id,category.name, category.shop_pages_id FROM category
LEFT JOIN products ON category.id = products.id WHERE category.id > 0";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($category=[];$row = mysqli_fetch_assoc($result);$category[]=$row);
//print_r('<pre>');print_r($category);

$query = "SELECT products.id, products.name, products.price, products.number, products.category_id FROM products
LEFT JOIN category ON category.id = products.category_id WHERE products.id <= 16";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($product=[];$row = mysqli_fetch_assoc($result);$product[]=$row);
//print_r('<pre>');print_r($product);


?>

<div class="container">
	<?php for ($i=0; $i < count($category); $i++) { 
			$name = $category[$i]['name'];
	?>
	<div class="card">
		<img src="elems/img/banana.jpg" alt="" class="fone">
		<div class="data">
		<?php echo "<a href=\"sub_category.php?sub_category='$name'\" class=\"sub_category\">$name</a>" ?>
			<?php for ($j=0; $j <count($product); $j++) { 
				$id = $product[$j]['id'];
				echo "<a href=\"product.php?product='$id'\" class=\"card-link\">"
			?>
			
			<?php if ($category[$i]['id'] == $product[$j]['category_id']) { 
				echo $product[$j]['name'];
			}
			?>
			</a>
			<?php } ?>
			<div class="tong"></div>
		</div>
	</div>
	<?php } ?>
</div>
