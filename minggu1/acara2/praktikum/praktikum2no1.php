<?php 
/**
  * 
  */
 class Car
 {
 	
 	//properties
 	public $comp;
 	public $color = 'beige';
 	public $hasSUnRoof = true;

 	//method = hello
 	public function hello (){
 		return "beep I am a <i>".$this-> comp.
 		"</i>, and I am <i>".$this-> color;
 	}
 }
 //create object di class
$bmw = new Car();
$mercedes = new Car();

//set value dari class properties
$bmw ->color = 'blue';
$bmw ->comp = 'BMW';
$mercedes ->comp = "mercedes Benz";

// Call hello method untuk $bmw object.
echo $bmw -> hello();
  ?>
