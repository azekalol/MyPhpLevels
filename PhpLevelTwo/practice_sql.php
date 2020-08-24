<?php
ini_set('display_errors','on');

$host = 'localhost';
$user = 'root';
$password = '123';
$db_name = 'test';

$link = mysqli_connect($host,$user,$password,$db_name) or die(mysqli_errors($link));
mysqli_query($link, "SET NAMES 'utf8'");

// SELECT - Выбрать
*$query = "SELECT * FROM super WHERE id = '1'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data = [];$row = mysqli_fetch_assoc($result);$data[] = $row);
print_r('<pre>');print_r($data);

/*$query = "SELECT * FROM practice_sql WHERE salary = '1000'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[] = $row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE age ='23'";
$result = mysqli_query($link,$query);
for($data = [];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE salary >'400'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE salary >='1000'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[] = $row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE salary !='500'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data = [];$row=mysqli_fetch_assoc($result);$data[] = $row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE salary <='900'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data = [];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE name='Вася'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data = [];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE age >'25' AND age <= '28'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE name ='Петя'";
$result = mysqli_query($link,$query) or die(mysql_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE age ='27' OR salary='1000'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE age >= '23' AND age <'27' OR salary='1000'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE age >='23' AND age <='27' OR salary >='400' AND salary <='1000'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data = [];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE age ='27' OR salary !='400'";
$result = mysqli_query($link,$query) or die(mysqli_errors($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT name, age FROM practice_sql WHERE id > '0'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data = [];$row =mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

// INSERT INTO - добавить, вставить

/*$query = "INSERT INTO practice_sql SET name = 'Никита', age = '26', salary='300'";
$result = mysqli_query($link,$query);
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);*/
//Проверка базы

/*$query = "INSERT INTO practice_sql SET name ='Азиз',age = '27', salary = '1000'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);*/

/*$query = "INSERT INTO practice_sql (name,age,salary) VALUES ('Ануар','25','1000')";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "INSERT INTO practice_sql (name,salary) VALUES ('Светлана','1200')";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "INSERT INTO practice_sql SET name = 'Лера',salary = '1000'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "INSERT INTO practice_sql (name,age,salary) VALUES ('Ярослав','30','1200'),('Петр','31','1000')";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

//DELETE - удаление

/*$query = "DELETE FROM practice_sql WHERE name = 'Светлана'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "DELETE FROM practice_sql WHERE id = '19'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "DELETE FROM practice_sql WHERE salary ='1200'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

//UPDATE - внести изменения

/*$query = "UPDATE practice_sql SET salary ='1200' WHERE name = 'Азиз'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "UPDATE practice_sql SET salary = '1200' WHERE id ='17'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "UPDATE practice_sql SET salary ='200' WHERE name = 'Вася'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "UPDATE practice_sql SET age ='35' WHERE id='4'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "UPDATE practice_sql SET salary ='700' WHERE salary ='500'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "UPDATE practice_sql SET age = '23' WHERE id>='2' AND id<='5'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

/*$query = "UPDATE practice_sql SET name ='Женя',salary ='900' WHERE id ='3'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));*/

//LIMIT = ограничения

/*$query = "SELECT * FROM practice_sql WHERE id <='6' LIMIT 0,6";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE id >'0' LIMIT 1,3";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE id >'0' ORDER BY salary";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE id >'0' ORDER BY salary DESC ";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE id >'0' ORDER BY age LIMIT 1,6";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT COUNT(*) as count FROM practice_sql WHERE id>'0'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT COUNT(*) as count FROM practice_sql WHERE salary='300'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE name LIKE '%р'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM slike WHERE author LIKE '%ов'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM slike WHERE article LIKE '%элемент%'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE age LIKE '3_'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

# Продвинутый SQL

/*$query = "SELECT * FROM slike WHERE id IN('1','2','3','5','14')";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE name IN('Дима','Никита','Петр')";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE id IN(1,2,5,7,21) AND name IN('Дима','Иван','Петр') AND salary > 300";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE salary BETWEEN 100  AND 1000";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE id BETWEEN 3 AND 21 AND salary BETWEEN 1000 AND 1200";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT id AS userID,name AS userLogin, salary AS userSalary FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT DISTINCT salary FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT COUNT(DISTINCT salary) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);

$query = "SELECT COUNT(DISTINCT salary) as count FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT DISTINCT age as userAge FROM practice_sql WHERE id > 0 ORDER BY userAge";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT MIN(salary) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data = [];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT MAX(salary) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT SUM(salary) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT SUM(salary) FROM practice_sql WHERE age BETWEEN 21 AND 25";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT SUM(salary) FROM practice_sql WHERE id IN(1,2,3,5)";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT AVG(salary) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT AVG(age) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysql_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT 3 AS res FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysql_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT 'eee' as res FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT SUM(age) AND SUM(salary) AS res FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT LEFT(name,2) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT RIGHT(name,2) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT SUBSTRING(name,2,5) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT id,name FROM category UNION SELECT id,name FROM model";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT *, CONCAT('salary','age') AS res FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT *, CONCAT(salary,age,'!!!') AS res FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT *, CONCAT_WS('-',name,salary,age) AS res FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT *, CONCAT(SUBSTRING(name,1,3),'...') AS res FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT age, MIN(salary) as min FROM practice_sql GROUP BY age";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT salary,MAX(age) as max FROM practice_sql GROUP BY salary";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT MIN(salary), MAX(salary) FROM practice_sql GROUP BY age";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE salary > (SELECT AVG(salary) FROM practice_sql)";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE age < (SELECT AVG(age)/2*3 FROM practice_sql)";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT MIN(salary) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

	// Выводит полные данные (id,name и т.д.)
/*$query = "SELECT * FROM practice_sql WHERE salary = (SELECT MIN(salary) FROM practice_sql)";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT MAX(salary) FROM practice_sql";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM practice_sql WHERE salary = (SELECT MAX(salary) FROM practice_sql)";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT MAX(salary) as max FROM practice_sql WHERE age = 25";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT (SELECT (MAX(age) - MIN(age))/2 FROM practice_sql) AS AVG";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT (SELECT (MAX(salary) - MIN(salary))/2 FROM practice_sql WHERE age = 25) AS AVG";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT

	category.id as mobil_id,
	category.name as mobil_name,
	model.category_id as mobil_category_id,
	model.id as mobil_model_id,
	model.name as mobil_model_name
	FROM model
	LEFT JOIN category ON category.id=model.category_id";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT * FROM model INNER JOIN category ON model.category_id = category.id";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

/*$query = "SELECT *, cities.name as city_name
FROM cities LEFT JOIN users ON cities.id = users.city_id";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/


/*$query = "SELECT users.id, users.name, cities.name as city_name
FROM users
LEFT JOIN rel ON rel.user_id=users.id
LEFT JOIN cities ON rel.city_id=cities.id";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

//1
/*$query = "SELECT products.id,products.name,products.price,products.number, category.name as category_name
FROM products
LEFT JOIN category ON category.id=products.product_id";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

//2
/*$query = "SELECT products.id,products.name,products.price, category.name as category_name
FROM products
LEFT JOIN category ON category.id=products.product_id WHERE category.name = 'Фрукты'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

//3
/*$query = "SELECT products.id,products.name,products.price, category.name as category_name
FROM products
LEFT JOIN category ON category.id=products.product_id WHERE category.name IN ('Фрукты','Мясо','Рыба')";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

// 4 достать все категории (без товаров, только названия категорий)
/*$query = "SELECT name FROM category";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

#5. достать все категории, в которых есть товары (без товаров, только названия категорий, без дублей):
/*$query = "SELECT DISTINCT category.name FROM category INNER JOIN products ON category.id = products.products_id";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

# 2.1 достать товары вместе с подкатегориями и категориями
/*$query = "SELECT products.id,products.name,sub_category.name as sub_category_name,category.name as category_name
FROM products
LEFT JOIN sub_category ON sub_category.id = products.sub_category_id
LEFT JOIN category ON sub_category.category_id = category.id";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

# 2.2 достать товары из подкатегории 'Помидоры'
/*$query = "SELECT products.id,products.name,products.price,products.number
FROM products
LEFT JOIN sub_category ON sub_category.id = products.sub_category_id WHERE sub_category.name = 'Помидор'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

# 2.3 достать все подкатегории категории 'Овощи'
/*$query = "SELECT sub_category.id,sub_category.name,sub_category.price
FROM sub_category
LEFT JOIN category ON category.id = sub_category.category_id WHERE category.name = 'Овощи'";
$result = mysqli_query($link,$query) or die(mysqli_error($link));
for($data=[];$row = mysqli_fetch_assoc($result);$data[]=$row);
print_r('<pre>');print_r($data);*/

?>
