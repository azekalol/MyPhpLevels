<?php
//10
class Employee
{
	public $name;
	public $surname;
	public $patronymic;
	public $salary;
}

//11
class City
{
	public $name;
	public $population;

	public function __construct($name,$population)
	{
		$this -> name = $name;
		$this -> population = $population;
	}
}
//12
class Student
{
	private $name;
	private $course;

	public function __construct($name)
	{
		$this -> name = $name;
		$this -> course = 1;
	}

	public function getName()
	{
		return $this -> name;
	}

	public function getCourse()
	{
		if ($this -> course <= 5) {
			return $this -> course;
		} else false;
	}

	public function transferNextCourse()
	{
		if ($this -> course < 5) {
			return $this -> course++;
		}else '';
	}
}

//13
class Arr
{
	private $arr_numbers = [];

	public function add_arr($arr)
	{

		foreach ($arr as $elem) {
			$this -> arr_numbers [] = $elem;
		}

	}

	public function get_arr_number()
	{
		return array_sum($this -> arr_numbers);
	}

	public function getAvg()
	{
		return array_sum($this -> arr_numbers)/ count($this -> arr_numbers);
	}
}

//14
class City
{
	public $name;
	public $population;
	public $foundation;

	public function __construct($name,$population)
	{
		$this -> name = $name;
		$this -> population = $population;
	}
}

//15
class User
{
	private $name;
	private $surname;
	private $age;

	public function __construct($name,$surname,$age)
	{
		$this -> name = $name;
		$this -> surname = $surname;
		$this -> age = $age;
	}

	public function getName()
	{
		return $this -> name;
	}

	public function getSurname()
	{
		return $this -> surname;
	}

	public function getAge()
	{
		return $this -> age;
	}
}

//16
class Arr
{
	private $numbers;

	public function __construct($numbers)
	{
		$this -> numbers = $numbers;
	}

	public function add($numbers)
	{
		$this -> numbers [] = $numbers;

	}

	public function getSum()
	{
		return array_sum($this -> numbers);
	}
}

//17
class Arr
{
	private $numbers;
	public function add($numbers)
	{
		$this -> numbers [] = $numbers;

		return $this;
	}
	public function append($x)
	{
		foreach ($x as $elem) {
		$this -> numbers [] =$elem;
		}
	return $this;

	}
	public function getSum()
	{
		return array_sum($this -> numbers);
	}
}
//18
class User
{
	private $name;
	private $surname;
	private $patronymic;

	public function setName($name)
	{
		$this -> name = $name;
		return $this;
	}
	public function setSurname($surname)
	{
		$this -> surname = $surname;
		return $this;
	}
	public function setPat($patronymic)
	{
		$this -> patronymic = $patronymic;
		return $this;
	}
	public function getName()
	{
		return $this -> name;
	}
	public function getSurname()
	{
		return $this -> surname;
	}
	public function getPat()
	{
		return $this -> patronymic;
	}
	public function getFullName()
	{
		return mb_substr($this->surname,0,1) . mb_substr($this->name,0,1) . mb_substr($this->patronymic,0,1);

	}
}

//19
class ArrayAvgHelper
{
	public function getAvg1($arr)
	{

		$num = $this -> getSum($arr,1);
		return $this -> calcSqrt($num,1);
	}

	public function getAvg2($arr)
	{
		$num = $this -> getSum($arr,2);
		return $this -> calcSqrt($num,1/2);
	}

	public function getAvg3($arr)
	{
		$num = $this -> getSum($arr,3);
		return $this -> calcSqrt($num,1/3);
	}

	public function getAvg4($arr)
	{
		$num = $this -> getSum($arr,4);
		return $this -> calcSqrt($num,1/4);
	}
	public function getAvg5($arr)
	{
		$num = $this -> getSum($arr,5);
		return $this -> calcSqrt($num,1/5);

	}

	private function getSum($arr,$power)
	{
		$sum = 0;
		foreach ($arr as $elem) {
			$sum += pow($elem,$power);
		}

		return $sum;
	}

	private function calcSqrt($num,$power)
	{
		$sqrt = 0;
		$sqrt += pow($num,$power);
		return $sqrt;
	}
}

//20
class User
{
	private $name;
	private $surname;
	private $age;

	public function setName($name)
	{
		$this -> name = $name;
	}
	public function getName()
	{
		return $this -> name;
	}

	public function setSurname($surname)
	{
		$this -> surname = $surname;
	}
	public function getSurname()
	{
		return $this -> surname;
	}

	public function setAge($age)
	{
		$this -> age = $age;
	}
	public function getAge()
	{
		return $this -> age;
	}
}

class Employee extends User
{
	private $salary;

	public function setSalary($salary)
	{
		$this -> salary = $salary;
	}
	public function getSalary()
	{
		return $this -> salary;
	}
}

class Student extends User
{
	private $course;

	public function setCourse($course)
	{
		$this -> course = $course;
	}
	public function getCourse()
	{
		return $this -> course;
	}
}

class Programmer extends Employee
{
	private $langs;

	public function setLangs($langs)
	{
		$this -> langs = $langs;
	}
	public function getLangs()
	{
		return $this -> langs;
	}
}

class Driver extends Employee
{
	private $drive_year;
	private $category;

	public function setDrive_year($drive_year)
	{
		$this -> drive_year = $drive_year;
	}
	public function getDrive_year()
	{
		return $this -> drive_year;
	}

	public function setCategory($category)
	{
		$this -> category = $category;
	}
	public function getCategory()
	{
		return $this -> category;
	}
}

//21
class User
{
	private $name;
	protected $age;

	public function setName($name)
	{
		$this -> name = $name;
	}

	public function getName()
	{
		return $this -> name;
	}

	public function setAge($age)
	{
		$this -> age = $age;
	}

	public function getAge()
	{
		return $this -> age;
	}
}

class Student extends User
{
	private $course;

	public function setCourse($course)
	{
		$this -> course = $course;
	}
	public function getCourse()
	{
		return $this -> course;
	}

	public function addOneYear()
	{
		$this -> age++;
		return $this -> age;

	}
}

//22
class User
{
	private $name;
	private $age;

	public function getName()
	{
		return $this -> name;
	}
	public function setName($name)
	{
		if (strlen($name) > 3) {
			$this -> name = $name;
		}
	}

	public function getAge()
	{
		return $this -> age;
	}
	public function setAge($age)
	{
		if ($age >= 18) {
			$this -> age = $age;
		}
	}
}

class Student extends User
{
	private $course;

	public function getCourse()
	{
		return $this -> course;
	}
	public function setCourse($course)
	{
		$this -> course = $course;
	}

	public function setAge($age)
	{
		if ($age <= 30) {
			parent::SetAge($age);
			$this -> age = $age;
		}
	}

	public function setName($name)
	{
		if (strlen($name) < 10) {
			parent:: setName($name);
			$this -> name = $name;
		}
	}
}

//23
class User
{
	private $name;
	private $age;
	public function __construct($name,$age)
	{
		$this -> name = $name;
		$this -> age = $age;
	}
	public function getName()
	{
		return $this -> name;
	}
	public function getAge()
	{
		return $this -> age;
	}
}

class Student extends User
{
	private $course;
	public function __construct($name,$age,$course)
	{
		parent:: __construct($name,$age);
		$this -> course = $course;
	}
	public function getCourse()
	{
		return $this -> course;
	}
}

//24
class User
{
	private $name;
	private $surname;
	private $birthday;
	private $age;

	public function __construct($name,$surname,$birthday)
	{
		$this -> name = $name;
		$this -> surname = $surname;
		$this -> birthday = $birthday;
		$this -> age = $this -> calculateAge($birthday);

	}
	public function getName()
	{
		return $this -> name;
	}
	public function getSurname()
	{
		return $this -> surname;
	}
	public function getBirthday()
	{
		return $this -> birthday;
	}

	public function getAge()
	{
		return $this -> age;
	}

	private function calculateAge($birthday)
	{
		$age = (int)date('Y-m-d') - (int)date($birthday);
		return $age;
	}
}

class Employee extends User
{
	private $salary;

	public function __construct($name,$surname,$birthday,$salary)
	{
		parent:: __construct($name,$surname,$birthday);
		$this -> salary = $salary;
	}

	public function getSalary()
	{
		return $this ->salary;
	}
}

//25
class Product
{
	private $name;
	private $price;

	public function setName($name)
	{
		$this -> name = $name;
	}

	public function getName()
	{
		return $this -> name;
	}
}

//26
class Arr
{
	private $sum;
	private $AvgHelper;

	public function __construct()
	{
		$this -> AvgHelper = new AvgHelper;
	}

	public function getAvgMeanSum()
	{
		$this -> sum = $sum;
		return $this -> AvgHelper -> getAvg($sum) + $this -> AvgHelper -> getMeanSqrt2($sum);
	}
	public function add($number)
	{
		$this->sum[] = $number;
	}
}

class AvgHelper
{

	public function getAvg($arr)
	{
		$avg = array_sum($arr) / count($arr);

		return $avg;
	}

	public function getMeanSqrt2($arr)
	{
		$num = $this -> getMean($arr,2);
		return $this -> getSqrt($num,1/2);
	}
	private function getMean($arr,$power)
	{
		$sum = 0;
		foreach ($arr as $elem) {
			$sum += pow($elem,$power);
		}

		return $sum;
	}

	private function getSqrt($num,$power)
	{
		$sqrt = 0;
		$sqrt += pow($num,$power);
		return $sqrt;
	}

}

//27
class Product
{
	private $name;
	private $price;
	private $quantity;

	public function __construct($name,$price,$quantity)
	{
		$this -> name = $name;
		$this -> price = $price;
		$this -> quantity = $quantity;
	}

	public function getName()
	{
		return $this -> name;
	}
	public function getPrice()
	{
		return $this -> price;
	}
	public function getQuantity()
	{
		return $this -> quantity;
	}

	public function getCost()
	{

		$cost = $this -> getPrice() * $this -> getQuantity();

		return $cost;
	}
}

class Cart
{
	private $products = [];

	public function add($product)
	{
		$this -> products[] = $product;
	}

	public function remove($name)
	{
		foreach ($this -> products as $key => $product) {
			if ($this -> getName() == $name) {
				unset($this -> products[$k]);
			}
		}
	}

	public function getTotalCost()
	{
		$sum_cost = 0;
		foreach ($this -> products as $product) {
			$sum_cost += $product -> getCost();
		}
		return $sum_cost;
	}

	public function getTotalQuantity()
	{
		$sum_quant = 0;
		foreach ($this -> products as $product) {
			$sum_quant += $product -> getQuantity();
		}

		return $sum_quant;
	}

	public function getAvgPrice()
	{
		$avg_price = $this -> getTotalCost()/$this -> getTotalQuantity();

		return $avg_price;
	}
}

//27
class User
{
	private $name;
	private $age;

	public function __construct($name,$age)
	{
		$this -> name = $name;
		$this -> age = $age;
	}

	public function getName()
	{
		return $this -> name;
	}

	public function getAge()
	{
		return $this -> age;
	}
}

//28
class Employee
{
	private $name;
	private $salary;

	public function __construct($name, $salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSalary()
	{
		return $this->salary;
	}
}

class EmployeesCollection
{
	private $employees = [];

	public function add($newEmlpoyee)
	{
		if (!$this -> exists($newEmlpoyee)) {
			$this -> employees[] = $newEmlpoyee;
		}

	}

	public function get()
	{
		return $this -> employees;
	}

	public function exists($newEmlpoyee)
	{
		foreach ($this -> employees as $employee) {
			if ($employee == $newEmlpoyee) {
				return true;
			}
		}
		return false;
	}
}

//29
class Employee
{
	private $name;
	private $salary;

	public function __construct($name,$salary)
	{
		$this -> name = $name;
		$this -> salary = $salary;
	}

	public function getName()
	{
		return $this -> name;
	}

	public function getSalary()
	{
		return $this -> salary;
	}

}
//30
class Student
{
	private $name;
	private $scholarship;

	public function __construct($name,$scholarship)
	{
		$this -> name = $name;
		$this -> scholarship = $scholarship;
	}

	public function getName()
	{
		return $this -> name;
	}

	public function getScholarship()
	{
		return $this -> scholarship;
	}
}

class UsersCollection
{
	private $empUsers = []; //массив работников
	private $stuUsers = []; // массив студентов

	//Метод добавления в массив
	public function add($user)
	{
		// Если передан объект класса Employee
		if ($user instanceof Employee) {
			$this -> empUsers[] = $user; //добавляем к работникам
		}
		// Если передан объект класса Student
		if ($user instanceof Student) {
			$this -> stuUser[] = $user; // добавляем к студентам
		}
	}

	public function getTotalSalary()
	{
		$sum = 0;
		foreach ($this -> empUsers as $salary) {
			$sum += $salary -> getSalary();
		}
		return $sum;
	}
	public function getTotalScholarship()
	{
		$sum1 = 0;
		foreach ($this -> stuUser as $scholarship) {
			$sum1 += $scholarship -> getScholarship();
		}
		return $sum1;
	}

	public function getPayment()
	{
		$sumPay = $this -> getTotalSalary() + $this -> getTotalScholarship();
		return $sumPay;
	}
}

//31
class Post
{
	private $name;
	private $salary;

	public function __construct($name,$salary)
	{
		$this -> name = $name;
		$this -> salary = $salary;
	}

	public function getName()
	{
		return $this -> name;
	}
	public function getSalary()
	{
		return $this -> salary;
	}
}

//32
class Employee
{
	private $name;
	private $surname;
	private $post;

	public function __construct($name,$surname,Post $post)
	{
		$this -> post = $post;
	}

	public function getName()
	{
		return $this -> name;
	}
	public function setName($name)
	{
		$this -> name = $name;
	}
	public function getSurname()
	{
		return $this -> surname;
	}

	public function setSurname($surname)
	{
		$this -> surname = $surname;
	}

	public function getPoste()
	{
		return $this -> post;
	}
	public function changePost(Post $post)
	{
		$this -> post = $post;

	}
}

//33
class ArraySumHelper
{
	public static function getSum1($arr)
	{
		return self::getSum($arr,1);
	}

	public static function getSum2($arr)
	{
		return self::getSum($arr,2);
	}

	private static function getSum($arr,$power)
	{
		$sum = 0;
		foreach ($arr as $elem) {
			$sum += pow($elem,$power);
		}

		return $sum;
	}

}
//34
class Num
{
	public static $num1 = 2;
	public static $num2 = 3;

	public static function getSum()
	{
		return Num::$num1 + Num::$num2;
	}
}

?>
