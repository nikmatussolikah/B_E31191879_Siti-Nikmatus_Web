<?php 

/**
  * 
  */
 class Kendaraan
 {
 	public $jenis_kendaraan;
 	public $jumlah_roda;
 	public $merk;
 	public $bahan_bakar;
 	public $harga;
 	public $tahun_pembuatan;

 	public function status_subsidi($bahan_bakar,$tahun_pembuatan)
 	{
 		if ($bahan_bakar == "premium" && $tahun_pembuatan < 2005)
 		 {
 			return "Ya";
 		} else {
 			return "Tidak";
 		}
 		
 	}
 	public function hargaSecond($tahun_pembuatan, $harga)
 	{
 		if ($tahun_pembuatan > 2010) {
 			return $harga - ($harga * (20/100));
 		} elseif($tahun_pembuatan > 2005){
 			return $harga - ($harga*(30/100));
 		} else if ($tahun_pembuatan < 2005) {
 			return $harga - ($harga*(40/100));
 		}
 	}


 }
//membuat instance
$mobil = new Kendaraan ();
$motor = new Kendaraan ();

//set values
$mobil -> bahan_bakar = "solar";
$mobil -> tahun_pembuatan = 2010;
$motor -> bahan_bakar = "premium";
$motor -> tahun_pembuatan = 2001;

//method get result
echo $mobil -> status_subsidi ($mobil->bahan_bakar,$mobil->tahun_pembuatan);
echo "<br />";
echo $motor -> status_subsidi ($motor->bahan_bakar,$motor->tahun_pembuatan);
echo "<hr />";

//set values
$mobil -> tahun_pembuatan = 2017;
$mobil -> harga = 20000000;

//get values
echo $mobil-> hargaSecond ($mobil->tahun_pembuatan, $mobil->harga);

?>