<?php 
/**
  * 
  */
 class kalkulator
 {
 	
 	private $x;
 	private $y;
 	private $z;
 }
 class Aritmatika extends kalkulator
 {

 	public function Tambah(){
 		return $hasil = $this->x + $this->y + $this->z;
 		return $hasil;
 	}
 	public function Kurang() {
 		return $hasil = $this->x - $this->y - $this->z;
 		return $hasil;
 	}
 	public function Bagi() {
 		return $hasil = $this->x / $this->y / $this->z;
 		return $hasil;
 	}
 	public function kali(){
 		return $hasil = $this->x * $this->y * $this->z;
 		return $hasil;
 	}
 	
 }
 	
//membuat object
$hasil1 = new Aritmatika();


$hasil1->x =12;
$hasil1->y =10;
$hasil1->z =8;

echo $hasil1->Tambah() ."<br />";
echo $hasil1->Kurang() ."<br />";
echo $hasil1->Bagi() . "<br />";
echo $hasil1->kali() . "<br />";
  ?>