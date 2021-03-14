<?php
//declarasi class
/**
 * 
 */
class Car
{
	//properties
	public $comp;
	public $color='beige';
	public $hasSunRoof = true;

	// method = hello
	public function hello()
	{
		return "beeb";
	}
}
//membuat instance
$bmw = new Car();
$mercedes = new Car();

//Get values
echo $bmw-> color; //beige
echo "<br/>";
echo $mercedes -> color;//beige
echo"<hr/>";

//set value
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//Get values
echo $bmw -> color; //blue
echo "<br />";
echo $mercedes -> color;//beige
echo "<br />";
echo $bmw -> comp; //BMW
echo "<br />";
echo $mercedes -> comp; // Mercendes Benz
echo "<hr />";

//method get a beep
echo $bmw -> hello(); //beep
echo "<br />";
echo $mercedes -> hello(); // beep
