<?php 
/**
  * 
  */
 class Car
 {
 	//public methode & properties.
 	public function getModel()
 	{
 		return "The car model is" . $this-> model;
 	}
 }
 $mercedes = new Car();
 //akses property dari dalam class
 $mercedes ->model= "mercedes benz";
 //akses property dari luar class
 echo $mercedes -> getModel();
  ?>