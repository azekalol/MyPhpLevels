<?php 
require_once 'abstract.php';


/*$employee = new Employee;
$employee -> setName('Aziz');
$employee -> setSalary(1000);

echo $employee -> getName();
$employee -> increaseRevenue(100);
echo $employee -> getSalary();
$employee -> decreaseRevenue(100);
echo $employee -> getSalary();

$scholarship = new Student;
$scholarship -> setName('Anuar');
$scholarship -> setScholarship(1000);
echo $scholarship -> getName();
$scholarship -> increaseRevenue(100);
echo $scholarship -> getScholarship();
$scholarship -> decreaseRevenue(100);
echo $scholarship -> getScholarship();*/

/*$quadrate = new Quadrate(2);
echo $quadrate -> getSquare().'<br>';
echo $quadrate -> getPerimeter().'<br>';
echo $quadrate -> getRatio().'<br>';
echo $quadrate -> getSquarePerimeterSum() .'<br>'.'<br>';

$rectangle = new Rectangle(3,5);
echo $rectangle -> getSquare().'<br>';
echo $rectangle -> getPerimeter().'<br>';
echo $rectangle -> getRatio().'<br>';
echo $rectangle -> getSquarePerimeterSum();*/

/*$quadrate = new Quadrate(2);
echo 'Quadrate Square -'.$quadrate -> getSquare().'<br>';
echo 'Quadrate Perimeter -'.$quadrate -> getPerimeter().'<br>'.'<br>';

$rectangle = new Rectangle(3,6);
echo 'Rectangle Square -'. $rectangle -> getSquare().'<br>';
echo 'Rectangle Perimeter -'.$rectangle -> getPerimeter().'<br>'.'<br>';

$disk = new Disk(2);
echo 'Disk Square -'. $disk -> getSquare().'<br>';
echo 'Disk Perimeter -'.$disk -> getPerimeter().'<br>';*/

/*$figurescollection = new FiguresCollection;
$figurescollection -> addFigure(new Quadrate(2));
$figurescollection -> addFigure(new Rectangle(2,3));
echo $figurescollection -> getTotalSquare().'<br>';
echo $figurescollection -> getTotalPerimeter();*/

/*$user = new User;
$user -> setName('Aziz');
$user -> setAge(27);
echo $user -> getName();
echo $user -> getAge();*/

/*$cube = new Cube(3);
echo $cube -> getSquare().'<br>';
echo $cube -> getV();*/

/*$user = new User('Abdilaziz',27);
echo $user -> getName();
echo $user -> getAge();*/

/*$employee = new Employee;
$employee -> setName('Aziz');
$employee -> setAge(27);
$employee -> setSalary(300000);
echo $employee -> getName().'<br>';
echo $employee -> getAge().'<br>';
echo $employee -> getSalary().'<br>';*/

//Ну такой себе метод, след. задача более правильная
/*$figurescollection = new FiguresCollection;
$figurescollection -> addFigure(new Quadrate(2,2));
echo 'FiguresCollection Quadrate -'.' '. $figurescollection -> getFigureSquare().'<br>';
$figurescollection -> addFigure(new Rectangle(2,4));
echo 'FiguresCollection Rectangle -'.' '. $figurescollection -> getFigureSquare().'<br>';
$figurescollection -> addFigure3d(new Cube(2,4,6));
echo 'FiguresCollection Cube -'.' '. $figurescollection -> getFigure3dSquare();*/

/*$cube = new Cube(2,4,6);
$cube1 = new Cube(3,5,7);
$cube2 = new Cube(4,5,6);
//echo 'Cube Volume -'.' '. $cube -> getVolume().'<br>';
//echo 'Cube - Square'.' '. $cube -> getSurfaceSquare().'<br>';

$quadrate1 = new Quadrate(3);
$quadrate2 = new Quadrate(4);
$quadrate3 = new Quadrate(2);

//echo 'Quadrate Square -'.' '.  $quadrate -> getSquare().'<br>';

$rectangle = new Rectangle(2,4);
$rectangle1 = new Rectangle(3,5);
$rectangle2 = new Rectangle(4,6);

//echo 'Rectangle Square -'.' '.  $rectangle -> getSquare().'<br>';

$arr = array($cube,$cube1,$cube2,$quadrate1,$quadrate2,$quadrate3,$rectangle,$rectangle1,$rectangle2);

//print_r('<pre>');print_r($arr);

foreach ($arr as $elem) {
	if ($elem instanceof Figure) {
		echo $elem -> getSquare().'<br>';
	}
}
foreach ($arr as $elem) {
	if ($elem instanceof Figure3d) {
		echo $elem -> getSurfaceSquare().'<br>';
	}
}*/

/*$quadrate = new Quadrate(2);
echo $quadrate -> getSquare().'<br>';

$disk = new Disk(5);
echo $disk -> getDiameter();*/


/*$programmer = new Programmer('Aziz',1000);

echo $programmer -> getName();
echo $programmer -> getSalary();
$programmer -> addLangs('Java');
echo $programmer -> getLangs();*/

/*$sphere = new Sphere(5,2);
echo $sphere -> getSquare().'<br>';
echo $sphere -> getVolume();*/




?>