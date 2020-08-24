<?php 

require_once 'Employee.php';

/*$emp = new Employee;

$emp -> name = 'Aziz';
$emp -> surname = 'Sakenov';
$emp -> salary = 1000;

$emp1 = new Employee;
$emp1 -> salary = 5000;

echo $emp-> name.' ';
echo $emp-> surname.'<br>';

echo $emp -> salary + $emp1 -> salary;*/

/*$cityes =
[
	new City('London',20),
	new City('New-York',30),
	new City('Beijin',30),
	new City('Nursultan',2)
];

//print_r('<pre>');print_r($cityes);

foreach ($cityes as $city) {
	echo $city-> name.' '.$city-> population.'<br>';
}*/

/*$student = new Student('Aziz');
echo $student -> getCourse();
$student -> transferNextCourse();
echo $student -> getCourse();*/

/*$arr = new Arr;

$x = ['1','2','3',4];

$arr -> add_arr($x);
echo $arr -> get_arr_number().'<br>';

echo $arr -> getAvg();*/

/*$city = new City('London','25');

$city -> foundation = '1000';

$prop = ['name','population','foundation'];
foreach ($prop as $elem) {
	echo $city -> $elem.'<br>';
}

echo $city -> {$prop[0]};*/

/*$user = new User('Aziz','Sakenov',25);

$method = [ 'method1' =>'getName', 'method2' =>'getSurname', 'method3' =>'getAge'];
//print_r('<pre>');print_r($method);

echo $user -> {$method['method1']}();
echo $user -> {$method['method2']}();*/

/*$arr = new Arr([1,2,3]);

echo (new Arr([1,2,3,4])) -> getSum();*/


/*$arr = new Arr;


echo $arr -> add(1)-> add(2) -> add(3) -> add(4) -> add(5) -> append([2,5,7]) -> getSum();

print_r('<pre>');print_r($arr);*/


/*$user = new User;
echo $user -> setName('Aziz') -> getFullName();*/


/*$result = new ArrayAvgHelper;

$arr = [1,2,3,4];
$arr1 = [1,2,3,4,5];

echo $result -> getAvg1($arr).'<br>';
echo $result -> getAvg2($arr).'<br>';
echo $result -> getAvg3($arr).'<br>';
echo $result -> getAvg4($arr).'<br>';
echo $result -> getAvg5($arr);*/

/*$user = new User;
$user -> setName('Aziz');
$user -> setSurname('Sakenov');
$user -> setAge(27);

echo $user -> getName().'<br>';
echo $user -> getSurname().'<br>';
echo $user -> getAge().'<br>'.'<br>';

$employee = new Employee;
$employee -> setName('Anuar');
$employee -> setSurname('Sakenov');
$employee -> setAge(25);
$employee -> setSalary(1000);

echo $employee -> getName().'<br>';
echo $employee -> getSurname().'<br>';
echo $employee -> getAge().'<br>';
echo $employee -> getSalary().'<br>'.'<br>';

$student = new Student;
$student -> setName('Lera');
$student -> setSurname('Sarsinbinova');
$student -> setAge('24');
$student -> setCourse(2);

echo $student -> getName().'<br>';
echo $student -> getSurname().'<br>';
echo $student -> getAge().'<br>';
echo $student -> getCourse().'<br>'.'<br>';

$programmer = new Programmer;

$programmer -> setName('Aziz');
$programmer -> setSurname('Sakenov');
$programmer -> setAge('27');
$programmer -> setSalary(1000);
$programmer -> setLangs('PHP');

echo $programmer -> getName().'<br>';
echo $programmer -> getSurname().'<br>';
echo $programmer -> getAge().'<br>';
echo $programmer -> getSalary().'<br>';
echo $programmer -> getLangs().'<br>'.'<br>';

$driver = new Driver;
$driver -> setName('Max');
$driver -> setSurname('Zhursinbekov');
$driver -> setAge(27);
$driver -> setSalary(1000);
$driver -> setDrive_year(5);
$driver -> setCategory('B');

echo $driver -> getName().'<br>';
echo $driver -> getSurname().'<br>';
echo $driver -> getAge().'<br>';
echo $driver -> getSalary().'<br>';
echo $driver -> getDrive_year().'<br>';
echo $driver -> getCategory().'<br>';*/

/*$user = new User;

$user -> setName('Aziz');
$user -> setAge(27);

echo $user -> getName().'<br>';
echo $user -> getAge().'<br>';

$student = new Student;

$student -> setName('Lera');
$student -> setAge(25);
$student -> setCourse(3);

echo $student -> getName().'<br>';
echo $student -> getCourse().'<br>';
$student -> addOneYear();
echo $student -> getAge();*/


/*$user = new User;
$user -> setName('Aziz');
$user -> setAge('27');
echo $user -> getName().'<br>';

$student = new Student;
$student -> setName('Anuar');
$student -> setAge('26');

echo $student -> getAge();
echo $student -> getName();*/

/*$user = new User('Aziz',27);
echo $user -> getName().'<br>';

$student = new Student('Abdilaziz',27,3);

echo $student -> getName().'<br>';
echo $student -> getAge().'<br>';
echo $student -> getCourse().'<br>';*/

/*$user = new User('Aziz','Sakenov','1993-02-24');
echo 'Name -'. $user -> getName().'<br>';
echo 'Surname -'. $user -> getSurname().'<br>';
echo 'Birthday -'. $user -> getBirthday().'<br>';
echo 'Age -'. $user -> getAge().'<br>'.'<br>';

$employee = new Employee('Lera','Sarsinbinova','1995-10-4',1000);
echo 'Name -'. $employee -> getName().'<br>';
echo 'Surname -'. $employee -> getSurname().'<br>';
echo 'Birthday -'. $employee -> getBirthday().'<br>';
echo 'Age -'. $employee -> getAge().'<br>';
echo 'Salary -'.$employee -> getSalary();*/

/*$product = new Product;
$product -> setName('Meat');
echo $product -> getName();

$product1 = $product;
echo $product1 -> getName();*/


//Залупа ебаня
/*$arr = new Arr(); // создаем объект
	
$arr->add(1); // добавляем в массив число 1
$arr->add(2); // добавляем в массив число 2
$arr->add(3); // добавляем в массив число 3
	
// Находим сумму квадратов и кубов:
echo $arr->getAvgMeanSum();*/

/*$cart = new Cart;

$cart ->add(new Product('Banana',100,1));
$cart ->add(new Product('Apple',300,1));
$cart ->add(new Product('Tomato',300,1));
$cart ->add(new Product('Fish',500,1));

echo 'You Cart:'.'<br>'.'<br>';
echo 'Total Cost -'. $cart -> getTotalCost().'<br>';
echo 'Total Quantity -'. $cart -> getTotalQuantity().'<br>';
echo 'Avg Price -'. $cart -> getAvgPrice();*/

//$user = new User('Aziz',27);
//$user1 = new User('Aziz',27);


//echo $user1 -> getAge();

/*function compare($user,$user1){
	if ($user == $user1) {
		echo 'true';
	}else echo 'false';
}

compare($user,$user1);*/

/*function compare($user,$user1){
	if ($user === $user1) {
		echo 'true';
	}else echo 'false';
}

compare($user,$user1);*/


/*function compare($user,$user1){
	if ($user === $user1) {
		echo '1';
	}elseif ($user == $user1) {
		echo '0';
	}else echo '-1';
}

compare($user,$user1);*/

	/*$employeesCollection = new EmployeesCollection;
	
	$employeesCollection->add(new Employee('Коля', 100));
	$employeesCollection->add(new Employee('Коля', 100)); // второго такого же не добавит
	
	var_dump($employeesCollection->get()); // убедимся в этом*/


/*$employee1 = new Employee('Aziz',1000);
$employee2 = new Employee('Anuar',1000);
$employee3 = new Employee('Valeriya',1000);

$student1 = new Student('Malika',500);
$student2 = new Student('Amina',500);
$student3 = new Student('Aruna',500);

$arr = [$employee1,$employee2,$student2,$student1,$employee3,$student3];

echo 'Employee:'.'<br>';
foreach ($arr as $elem) {
	if ($elem instanceof Employee) {
		echo $elem -> getName().'<br>';
	}
}

$sum = 0;
foreach ($arr as $salary) {
	if ($salary instanceof Employee) {
		$sum += $salary -> getSalary();
	}
}

echo 'Total Salary:',$sum.'<br>';

echo '<br>';

echo 'Student:'.'<br>';
foreach ($arr as $elem) {
	if ($elem instanceof Student) {
		echo $elem -> getName().'<br>';
	}
}

$sum1 = 0;
foreach ($arr as $key => $scholarship) {
	if ($scholarship instanceof Student) {
		$sum1 += $scholarship -> getScholarship();
	}
}

echo 'Total Scholarship:', $sum1;



//print_r('<pre>');print_r($arr);*/


/*$usersCollection = new UsersCollection;
	
$usersCollection->add(new Student('Петя', 100));
$usersCollection->add(new Student('Ваня', 200));

$usersCollection->add(new Employee('Коля', 300));
$usersCollection->add(new Employee('Вася', 400));

// Получим полную сумму стипендий:
echo $usersCollection->getTotalScholarship(); // выведет 300

// Получим полную сумму зарплат:
echo $usersCollection->getTotalSalary(); // выведет 700

// Получим полную сумму платежей:
echo $usersCollection->getPayment(); // выведет 1000*/


/*$post = new Post('Programmer',1000);
$post1 = new Post('Manager',1000);
$post2 = new Post('Screenwriter',1000);

$employee = new Employee('Abdilaziz','Sakenov',$post);

$employee -> setName('Abdilaziz');
$employee -> setSurname('Sakenov');
echo $employee -> getName();
echo $employee -> getSurname();
echo $employee -> getPoste() -> getName();
echo $employee -> getPoste() -> getSalary();


$employee -> changePost($post2);
echo $employee -> getName();
echo $employee -> getSurname();
echo $employee -> getPoste() -> getName();
echo $employee -> getPoste() -> getSalary();*/


/*$arraySumHelper = new ArraySumHelper;
$arr = [1,2,3];
echo $arraySumHelper -> getSum1($arr,1).'<br>';
echo $arraySumHelper -> getSum2($arr,2);*/

/*$num = new Num;

echo Num::getSum();*/
?> 