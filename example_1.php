<?php

/*
1. Encapsulation
	- public
	- private
	- protected
2. Inheritance
3. Polymorphisme
*/

class Human
{
	private static $count = 0;
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
		self::$count++;
	}

	public static function getAmountOfHumans()
	{
		return self::$count;
	}

	public function getName()
	{
		return $this->name;
	}

}

echo Human::getAmountOfHumans();
