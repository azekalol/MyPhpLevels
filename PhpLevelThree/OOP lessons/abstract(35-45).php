<?php
//35
abstract class User
{
	private $name;
	public function getName()
	{
		return $this -> name;
	}
	public function setName($name)
	{
		$this -> name = $name;
	}
	abstract public function increaseRevenue($value);
	abstract public function decreaseRevenue($value);
}

class Employee extends User
{
	private $salary;

	public function getSalary()
	{
		return $this -> salary;
	}

	public function setSalary($salary)
	{
		$this -> salary = $salary;
	}

	public function increaseRevenue($value)
	{
		$this -> salary = $this -> salary + $value;
	}

	public function decreaseRevenue($value)
	{
		$this -> salary = $this -> salary - $value;
	}
}

	class Student extends User
{
	private $scholarship;

	public function getScholarship()
	{
		return $this -> scholarship;
	}

	public function setScholarship($scholarship)
	{
		$this -> scholarship = $scholarship;
	}

	public function increaseRevenue($value)
	{
		$this -> scholarship = $this -> scholarship + $value;
	}
	public function decreaseRevenue($value)
	{
		$this -> scholarship = $this -> scholarship - $value;
	}
}

//36
abstract class Figure
{

	abstract public function getSquare();

	abstract public function getPerimeter();

	public function getRatio()
	{
		return $this -> getSquare()/ $this -> getPerimeter();
	}
	public function getSquarePerimeterSum()
	{
		return $this -> getSquare() + $this -> getPerimeter();
	}
}

class Quadrate extends Figure
{
	private $a;

	public function __construct($a)
	{
		$this -> a = $a;
	}

	public function getSquare()
	{
		return $this -> a * $this -> a;
	}

	public function getPerimeter()
	{
		return $this -> a * 4;
	}

}

class Rectangle extends Figure
{
	private $a;
	private $b;

	public function __construct($a,$b)
	{
		$this -> a = $a;
		$this -> b = $b;
	}

	public function getSquare()
	{
		return $this -> a * $this -> b;
	}

	public function getPerimeter()
	{
		return 2*($this -> a + $this -> b);
	}
}
//37
interface Figure
{
	public function getSquare();
	public function getPerimeter();
}

class Quadrate implements Figure
{
	private $a;

	public function __construct($a)
	{
		$this -> a = $a;
	}

	public function getSquare()
	{
		return $this -> a * $this -> a;
	}
	public function getPerimeter()
	{
		return $this -> a * 4;
	}
}

class Rectangle implements Figure
{
	private $a;
	private $b;

	public function __construct($a,$b)
	{
		$this -> a = $a;
		$this -> b = $b;
	}
	public function getSquare()
	{
		return $this -> a * $this -> b;
	}
	public function getPerimeter()
	{
		return 2*($this -> a + $this -> b);
	}
}

class Disk implements Figure
{
	private $r;
	public function __construct($r)
	{
		$this -> r = $r;
	}
	public function getSquare()
	{
		return 3.14*($this -> r * $this -> r);
	}
	public function getPerimeter()
	{
		return $this ->r * 6.28;
	}
}

class FiguresCollection
{
	private $figures = [];

	public function addFigure(Figure $figure)
	{
		$this -> figures [] = $figure;
	}
	public function getTotalSquare()
	{
		$sum = 0;
		foreach ($this -> figures as $figure) {
			$sum += $figure -> getSquare();
		}
		return $sum;
	}
	public function getTotalPerimeter()
	{
		$sum = 0;
		foreach ($this -> figures as $figure) {
			$sum += $figure -> getPerimeter();
		}
		return $sum;
	}
}

//38
interface iUser
{
	public function getName();
	public function setName($name);
	public function getAge();
	public function setAge($age);
}

class User implements iUser
{
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
//39
interface iCube
{
	public function __construct($a);
	public function getSquare();
	public function getV();
}

class Cube implements iCube
{
	public function __construct($a)
	{
		$this -> a = $a;
	}
	public function getSquare()
	{
		return pow($this -> a,2);
	}
	public function getV()
	{
		return pow($this -> a,3);
	}
}

//40
interface iUser
{
	public function __construct($name,$age);
	public function getName();
	public function getAge();
}


class User implements iUser
{

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
//41
interface iUser
{
	public function getName();
	public function getAge();
	public function setAge($age);
	public function setName($name);
}

interface iEmployee extends iUser
{
	public function getSalary();
	public function setSalary($salary);
}

class Employee implements iEmployee
{
	public function getName()
	{
		return $this -> name;
	}
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
		$this -> age = $age;
	}
	public function getSalary()
	{
		return $this -> salary;
	}
	public function setSalary($salary)
	{
		$this -> salary = $salary;
	}
}
//42
interface Figure3d
{
	public function getVolume();
	public function getSurfaceSquare();

}

class Cube implements Figure3d
{
	private $a;
	private $b;
	private $c;
	public function __construct($a,$b,$c)
	{
		$this -> a = $a;
		$this -> b = $b;
		$this -> c = $c;
	}
	public function getVolume()
	{
		return pow($this -> a, 12);
	}
	public function getSurfaceSquare()
	{
		return $this ->a * $this ->b * $this -> c;
	}
}


interface Figure
{
	public function getSquare();
}
class Quadrate implements Figure
{
	private $a;
	private $b;
	public function __construct($a)
	{
		$this -> a = $a;
	}
	public function getSquare()
	{
		return $this -> a * $this -> a;
	}

}

class Rectangle implements Figure
{
	private $a;
	private $b;
	public function __construct($a,$b)
	{
		$this -> a = $a;
		$this -> b = $b;
	}
	public function getSquare()
	{
		return $this -> a * $this -> b;
	}

}

//Ну такой себе метод, след. задача более правильная
/*class FiguresCollection
{
	private $figures = [];
	private $figure3d = [];

	public function addFigure($figure)
	{
		$this -> figures[] = $figure;

	}
	public function getFigureSquare()
	{
		$arr = [];
		foreach ($this -> figures as $figure) {
			$arr = $figure -> getSquare();
		}
		return $arr;
	}
	public function addFigure3d($figure3d)
	{
		$this -> figure3d[] = $figure3d;
	}
	public function getFigure3dSquare()
	{
		$arr = [];
		foreach ($this -> figure3d as $figure3d) {
			$arr = $figure3d -> getSurfaceSquare();
		}
		return $arr;
	}
}*/

//43
interface Figure
{
	public function getSquare();
	public function getPerimeter();
}

interface Tetragon
{
	public function getA();
	public function getB();
	public function getC();
	public function getD();
}

interface Circle
{
	public function getRadius();
	public function getDiameter();
}

class Quadrate implements Figure,Tetragon
{
	private $a;

	public function __construct($a)
	{
		$this -> a = $a;
	}
	public function getSquare()
	{
		return $this -> a * $this -> a;
	}
	public function getPerimeter()
	{
		return $this -> a * 4;
	}
	public function getA()
	{
		return $this -> a;
	}
	public function getB()
	{
		return $this -> a;
	}
	public function getC()
	{
		return $this -> a;
	}
	public function getD()
	{
		return $this -> a;
	}
}

class Rectangle implements Figure,Tetragon
{
	private $a;
	private $b;
	public function __construct($a,$b)
	{
		$this -> a = $a;
		$this -> b = $b;
	}
	public function getSquare()
	{
		return $this -> a * $this -> b;
	}
	public function getPerimeter()
	{
		return ($this -> a * $this -> b)/2;
	}
	public function getA()
	{
		return $this -> a;
	}
		public function getB()
	{
		return $this -> b;
	}
		public function getC()
	{
		return $this -> c;
	}
		public function getD()
	{
		return $this -> b;
	}
}

class Disk implements Figure,Circle
{
	private $r;

	public function __construct($r)
	{
		$this -> r = $r;
	}
	public function getRadius()
	{
		return $this -> r;
	}
	public function getDiameter()
	{
		return $this -> r * $this -> r;
	}
	public function getSquare()
	{
		return 3.14 * pow($this -> r, 2);
	}
	public function getPerimeter()
	{
		return $this -> r;
	}
}

//44
interface iProgrammer
{
	public function __construct($name,$salary);
	public function getName();
	public function getSalary();
	public function getLangs();
	public function addLangs($langs);
}

class Employee
{
	protected $name;
	protected $salary;
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

class Programmer extends Employee implements iProgrammer
{
	private $langs;
	public function __construct($name,$salary)
	{
		parent::__construct($name,$salary);
	}
	public function addLangs($langs)
	{
		$this -> langs = $langs;
	}
	public function getLangs()
	{
		return $this -> langs;
	}
}

//45
interface iSphere
{
	public function __construct($radius,$a);
	public function getSquare();
	public function getVolume();
}

class Figure
{
	protected $a;
	const PI = 3.14;
	public function __construct($a)
	{
		$this -> a = $a;
	}
	public function getSquare()
	{
		return $this -> a;
	}
	public function getVolume()
	{
		return self:: PI * ($this -> a * $this ->a);
	}
}

class Sphere extends Figure implements iSphere
{
	private $radius;
	public function __construct($radius,$a)
	{
		$this -> radius = $radius;
		parent:: __construct($a);
	}
}
?>
