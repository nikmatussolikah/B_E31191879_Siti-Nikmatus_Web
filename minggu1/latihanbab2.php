<?php 
/**
 * 
 */
class laptop
{
	public $pemilik;
	public $merk;

	public function hidupkan_laptop()
	{
		return "Hidupkan laptop ". $this->merk." punya ". $this->pemilik;
	}
	public function matikan_laptop (){
		return "Matikan laptop ". $this->merk. " punya ". $this->pemilik;
	}
	public function restart_laptop()
	{
		return "Matikan laptop ". $this->merk. " Punya ". $this->pemilik. " dan " . "Hidupkan laptop ". $this->merk. " Punya ". $this->pemilik;
	}
}
//membuat object
$Laptop_A = new laptop();
$Laptop_A->merk = "ASUS";
$Laptop_A->pemilik = "A";
echo $Laptop_A->hidupkan_laptop();
echo "<br/>";

$Laptop_B = new laptop();
$Laptop_B->merk = "Acer";
$Laptop_B->pemilik = "B";
echo $Laptop_B->matikan_laptop();
echo "<br/>";

$Laptop_C = new laptop();
$Laptop_C->merk = "Lenovo";
$Laptop_C->pemilik = "C";
echo $Laptop_C->restart_laptop();
echo "<br/>";
 ?>