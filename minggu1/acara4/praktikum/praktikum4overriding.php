<?php
//The parent class has hello method that returns "beep"
class Car {
	public function hello()
	{
		return "beep";
	}
}
//The child class has hello method that returns "Hallo"
class SportsCar extends Car {
	public function hello()
	{
		return "Hallo";
	}
}

//Create a new object
$SportsCar1 = new SportsCar();

//Get the result of the hello method 
echo $SportsCar1 -> hello();
?>