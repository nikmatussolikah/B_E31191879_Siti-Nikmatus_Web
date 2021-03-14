<?php 
/**
  * 
  */
 class Car
 {
 	//private
 	private $model;
 	
 	public function getModel ()
 	{
 		return "The Car model is" . $this ->model;
 	}
 }

$mercedes = new Car();

//hak akses property dari luar class
$mercedes ->model = "Mercedes benz";
echo $mercedes -> getModel();
?>