<?php 

/*class Employee {
	public $name;
	public $age;
	public $salary;
}
$employee1 = new Employee;
$employee1 ->name = 'Вася';
$employee1 ->age = '30';
$employee1 ->salary = '300';

$employee2 = new Employee;
$employee2 ->name = 'Коля';
$employee2 ->age = '25';
$employee2 ->salary = '500';

$employee3 = new Employee;
$employee3 ->name = 'Петя';
$employee3 ->age = '35';
$employee3 ->salary = '1000';

echo $employee1->age + $employee3->age;*/

/*class User {
	public $name;
	public $age;

	public function show() {
		return '!!!';
	}
}

$user = new User;
$user->name = 'Иван';
$user->age = '27';

echo $user->show();*/


/*class User {
	public $name;
	public $age;
	public $salary;

	public function show($str){
		return $str .'!!!';
	}
}

$user = new User;
$user->name = 'Aziz';
$user->age = '27';
$user->salary = '1000';

echo $user->show('Hello Aziz, you PHP developer');*/

/*class Employee {
	public $name;
	public $age;
	public $salary;

	public function getName(){
		return $this->name;
	}
	public function getAge(){
		return $this->age;
	}
	public function getSalary(){
		return $this->salary;
	}

	public function checkAge(){
		if ($this->age > 18) {
			echo 'true';
		}else echo 'false';
	}
}

$user = new Employee;
$user->name = 'Aziz';
$user->age = '27';
$user->salary = '1000';

$user1 = new Employee;
$user1->name ='Ваня';
$user1->age ='19';
$user1->salary = '500';

echo $user1->checkAge();*/


/*class User {
	public $name;
	public $age;

	public function setAge($age){
		if ($this->age >= 18) {
			$this->age = $age;
		}
	}
}

$user = new User;
$user->name = 'Коля';
$user->age = '15';

$user->setAge(30);

echo $user->age;*/


/*class Employee{
	public $name;
	public $salary;

	public function doubleSalary($salary){
		$this->salary = $salary * 2;
	}
}

$employee = new Employee;
$employee->name = 'Aziz';
$employee->salary = 100;

$employee->doubleSalary(100);

echo $employee->salary;*/


/*class Rectangle{
	public $height;
	public $width;
	public $square;
	public $perimeter;

	public function getSquare($height,$width){
		$this->square = $height * $width;
	}

	public function getPerimeter($height,$width){
		$this->perimeter = ($height + $width) * 2;
	}
}

$rectangle = new Rectangle;
$rectangle->height = '10';
$rectangle->width = '20';

$rectangle->getSquare(20,20);

$rectangle->getPerimeter(20,20);

echo 'Square'.'-'. $rectangle->square.'<br>';
echo 'Perimeter'.'-'. $rectangle->perimeter;*/


/*class Rectangle{
	public $height;
	public $width;
	public function getSquare(){
		return $this-> height * $this-> width;
	}

	public function getPerimeter(){
		return ($this -> height + $this -> width) * 2;
	}
}

$rec = new Rectangle;
$rec -> height = 10;
$rec -> width = 10;

echo $rec->getSquare().'<br>';
echo $rec -> getPerimeter();*/


/*class User
{
	public $age;

	public function setAge($age)
	{
		if ($this -> correctAge($age)) {
			$this -> age = $age;
		}
	}

	public function addAge($years)
	{	
		$newAge = $this -> age + $years;
			if ($this -> correctAge($newAge)) {
			$this -> age = $newAge;
			}
	}

	public function subAge($min_years)
	{
		$result = $this -> age - $min_years;
			$this -> age = $result;

	}

		private function correctAge($age)
	{
		if ($age >= 18 && $age <= 60) {
			return true;
		}else return false;
	}
}

$user = new User;
$user -> setAge(30);
$user -> addAge(20);
$user -> subAge(20);

echo $user -> age;*/

/*class Student
{
	public $name;
	public $course;

	public function transferToNextCourse($course)
	{
		if ( 1 <= $course && $course < 5) {
			$newCourse = $course + 1;
			$this -> course = $newCourse;
		}
	}

		private function isCourseCorrect($newCourse)
	{
		if ($newCourse > 5) {
			return false;
		}
	}
}

$student = new Student;
$student -> name = 'Aziz';
$student -> course = 5;
$student -> transferToNextCourse(6);

echo $student -> course;*/


/*class Employee
{
	public $name;
	public $age;
	public $salary;

	public function __construct($name,$age,$salary)
	{
		$this -> name = $name;
		$this -> age = $age;
		$this -> salary = $salary;
	}
}

$employee = new Employee('Aziz','27','1000');
$employee1 = new Employee('Oleg','25','1000');

echo $employee -> name.'<br>';
echo $employee -> age.'<br>';
echo $employee -> salary.'<br>'.'<br>';

echo $employee1 -> name.'<br>';
echo $employee1 -> age.'<br>';
echo $employee1 -> salary.'<br>'.'<br>';


echo $employee -> salary + $employee1 -> salary;*/

/*class Employee 
{
	private $name;
	private $age;
	private $salary;

	public function setName($name)
	{
		$this -> name = $name;
	}

	public function getAge()
	{
		return $this -> age;
	}

	public function setAge($age)
	{
		if ($this -> isAgeCorrect($age)) {
			$this -> age = $age;
		}

	}

	public function setSalary($salary)
	{
		$this -> salary = $salary;
	}

	public function getName($name)
	{
		return $this -> name;
	}

	public function getSalary()
	{
		return $this -> salary .'$';

	}

	private function isAgeCorrect($age)
	{
		if (1 <= $age && $age <= 100) {
			$this -> age = $age;
		}else $this -> age = $age;
	}
}

$emp = new Employee;

$emp -> setAge(20);
$emp -> setSalary(10000);

echo $emp -> getAge().'<br>';

echo $emp -> getSalary();*/

/*class Worker
{
	private $name;
	private $surname;
	private $salary;

	public function __construct($name,$surname,$salary)
	{
		$this -> name = $name;
		$this -> surname = $surname;
		$this -> salary = $salary;
	}

	public function getName()
	{
		return $this -> name;
	}

	public function getSurname()
	{
		return $this -> surname;
	}

	public function getSalary()
	{
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this -> salary = $salary;
	}

}

$worker = new Worker('Aziz','Sakenov','1000');
$worker -> getName();
$worker -> getSurname();
$worker -> setSalary(5000);


echo $worker-> getName().' ';
echo $worker-> getSurname().'<br>';
echo $worker -> getSalary();*/


?>