<?php

/*trait Helper
{
	private $name;
	private $age;
	public function getName()
	{
		return $this -> name;
	}
	public function getAge()
	{
		return $this -> age;
	}
}

class Country
{
	use Helper;

	private $name;
	private $age;
	private $population;
	public function __construct($name,$age,$population)
	{
		$this -> name = $name;
		$this -> age = $age;
		$this -> population = $population;
	}
	public function getPopulation()
	{
		return $this -> population;
	}
}*/

/*trait Trait1
{
	public function method1()
	{
		return $this -> a;
	}
}

trait Trait2
{
	public function method2()
	{
		return $this -> b;
	}
}

trait Trait3
{
	public function method3()
	{
		return $this -> c;
	}
}

class Test
{
	use Trait1,Trait2,Trait3;
	private $a;
	private $b;
	private $c;
	public function __construct($a,$b,$c)
	{
		$this -> a = $a;
		$this -> b = $b;
		$this -> c = $c;
	}
	public function getSum()
	{
		return $this -> method1() + $this -> method2() + $this -> method3();
	}
}*/

/*trait Trait1
{
	public function method()
	{
		return $this -> a;
	}
}

trait Trait2
{
	public function method()
	{
		return $this -> b;
	}
}

trait Trait3
{
	public function method()
	{
		return $this -> c;
	}
}

class Test
{
	use Trait1,Trait2,Trait3{
		Trait1::method insteadof Trait2;
		Trait1::method insteadof Trait3;
		Trait1::method as method1;
		Trait2::method as method2;
		Trait3::method as method3;
	}
	private $a;
	private $b;
	private $c;
	public function __construct($a,$b,$c)
	{
		$this -> a = $a;
		$this -> b = $b;
		$this -> c = $c;
	}
	public function getSum()
	{
		return $this -> method1() + $this -> method2() + $this -> method3();
	}
}*/

	/*trait TestTrait
	{
		public function method1()
		{
			return 1;
		}

		// Абстрактный метод:
		abstract public function method2();
	}

	class Test
	{
		use TestTrait{

		}
	}*/

/*trait Trait1
{
	public function method1()
	{
		return 1;
	}
	public function method2()
	{
		return 2;
	}
}

trait Trait2
{
	use Trait1;
	public function method3()
	{
		return 3;
	}
}

class Test
{
	use Trait2;
	public function getSum()
	{
		return $this -> method1() + $this -> method2() + $this -> method3();
	}
}

 // Можно вот так...
class Test
{
	use Trait2;
			public function __construct()
		{
			echo $this->method1(); // метод первого трейта
			echo $this->method2(); // метод первого трейта
			echo $this->method3(); // метод второго трейта
		}
	}

	new Test;*/

 


?>
