<?php 
/**
  * 
  */
 class Car
 {
 	public $tank;
 	public function fill($float)
 	{
 		$this-> tank += $float;
 		return $this;
 	}

 	//substract gallons of fuel from the thank as we ride the car
 	public function ride($float){
 		$miles = $float;
 		$gallons = $miles/50;
 		$this -> tank -= ($gallons);

 		return $this;
 	}
 }
 //create a new object from the car class.
 $bmw = new Car ();

 //Add 10 gallons of fuel, then ride 40 miles
 //Add get the number of gallons in the tank.
 $tank = $bmw -> fill(10) -> ride(40) -> tank;

 //printout.
 echo "the number of gallons left in the tank:" . $tank. "gal.";
?>