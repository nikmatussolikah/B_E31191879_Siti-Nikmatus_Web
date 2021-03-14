<?php 
/**
  * 
  */
 class Buku
 {
 	public $judul_buku;
	public $pengarang = 'ndaquila';
	public $penerbit;
	public $tahun_terbit;
	public $cetakan;

 	public function hello()
 	{
 		return "beeb";
 	}
 }
//membuat instance
$novel = new Buku ();
$komik = new Buku ();

//get values
echo $novel -> pengarang;
echo "<br />";
echo $komik -> pengarang;
echo "<hr />";

//set value
$novel -> judul_buku = "let me go";
$komik -> judul_buku = "hold the night";
$komik -> pengarang = 'ndaquataku';

//get values
echo $novel -> pengarang;
echo "<br />";
echo $novel -> judul_buku;
echo "<br />";
echo $komik -> pengarang;
echo "<br />";
echo $komik -> judul_buku;
echo "<hr />";
 ?>