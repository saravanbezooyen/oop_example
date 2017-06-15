<?php

	/* OOP - Object Orientated Programming
		1. Encapsulation
			1. public
			2. private
			3. protected
		2. Inheritance
		3. Polymorphisme
	*/

abstract class Human
{
	/* properties */
	protected $firstname;
	protected $lastname;
	protected static $amount = 0;

	/* methods */
	public function __construct($firstname = null, $lastname = null)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		self::$amount++;
		echo "A new human was born (" . $this->firstname . ") , there are now " . self::$amount . " humans.<br>";
	}

	public function talk($sentence)
	{
		echo $this->firstname . " zegt: \"" . $sentence . "\".<br>";
	}

	public function setFirstname($firstname)
	{
		if ($firstname === "Martijn") {
			return false;
		}

		$this->firstname = $firstname;
	}

	public function setLastname($lastname)
	{
		if ($lastname === "van Cooten") {
			return false;
		}

		$this->lastname = $lastname;
	}
}

class Female extends Human
{
	private $gender = "female";
}

class Male extends Human
{
	private $gender = "male";
}

$elise = new Female("Elise", "Eijkhout");
$elise->talk("Weet ik niet.");

$erick = new Male("Erick", "Kok");
$erick->talk("Wat weet je niet?");

$tim = new Male("Tim", "Waterham");
$tim->talk("Ik ben zo moe!");

$glenn = new Male("Glenn", "Nugteren");
$glenn->talk("Help jongens?! Laat me niet achter!");

