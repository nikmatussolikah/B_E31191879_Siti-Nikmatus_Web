<?php 
//the parent class
/**
  * 
  */
 class Car
 {
 	//the $model property is private, that it can be accessed
 	//Only From inside the class
 	private $model;

 	public function setModel ($model)
 	{
 		$this->model = $model;
 	}
 }
 //the child class
  class SportsCar extends Car
  {
  	
    public function hello()
  	{
  		return "beep! I am a <i>" . $this->model . "</i><br/>";
  	}
  }
 //create an instance from the child class
 $SportsCar1 = new SportsCar();
 //Set the class model name
 $SportCar1-> setModel ('Mercedes Benz');
 ?>