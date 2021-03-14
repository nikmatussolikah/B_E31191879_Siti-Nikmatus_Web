<?php 
/**
  * 
  */
 class Mobillengkap
 {
 	
 	public function nontonTV()
 	{
 		return "Tv dihidupkan, TV mencari chanel, Tv Menampilkan gambar";
 	}
 }

  class MobilBMW extends Mobillengkap
  {
  	
  }

   class MobilBMWberaksi
   {
   	
   	public function nontonTV()
   	{
   		return "Tv dihidupkan, TV mencari chanel, Tv Menampilkan gambar";
   	}
   public function HidupkanMobil() {
   		return "Puter kunci keatas, mesin menyala, mobil menyala";
   }
   public function MatikanMobil(){
   		return "puter kunci kebawah, mesin mati, mobil mati ";
   }
   public function ubahgigi(){
   		return "Injak pedal rem, injak kopling, gigi mobil berganti";
   }
}
    ?>