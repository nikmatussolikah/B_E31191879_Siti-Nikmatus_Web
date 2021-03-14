<?php

	/**
	 * 
	 */
	class siswa
	{
		public $alamat;
		public $jarakrumah;
		public $nilaimepelIPA;
		public $nilaimapelIPS;
		public $gajiortu;
		public $nilaiUN;

		function Lolos ($jarakrumah,$nilaiUN)
		{
			if ($jarakrumah <= 10 && $nilaiUN > 20) {
				return "Selamat  Anda Lolos";
			}else {
				return "Maaf Anda Tidak Lolos";
			}
		}
		function Jurusan ($nilaimapelIPS,$nilaimepelIPA){
			if ($nilaimepelIPA>$nilaimapelIPS) {
				return "Jurusan IPA";
			} else {
				return "Jurusan IPS";
			}
		}

		function Unggulan ($nilaimapelIPS,$nilaimepelIPA,$nilaiUN) {
			if ($nilaiUN > 38.00 && $nilaimepelIPA > 90) {
				return "Kelas Unggulan IPA";
			} elseif ($nilaiUN > 37.00 && $nilaimapelIPS > 90) {
				return "Kelas Unggulan IPS";
			} else {
				return "Reguler";
			}
		}
	}
//membuat intance
$salsa = new siswa();

//set value
$salsa -> jarakrumah = 1;
$salsa -> nilaiUN= 26;
$salsa -> nilaimapelIPS= 80;
$salsa -> nilaimepelIPA = 89;
$salsa -> gajiortu= 3000000;

//methode get result
echo $salsa -> lolos ($salsa->jarakrumah,$salsa->nilaiUN);
echo "<br />";
echo "Salsa diterima di jurusan:";
echo $salsa -> Jurusan ($salsa->nilaimapelIPS,$salsa->nilaimepelIPA);
echo "<br />";
echo "Dalam Kelas: ";
echo $salsa -> Unggulan ($salsa->nilaiUN,$salsa->nilaimepelIPA,$salsa->nilaimapelIPS);
echo "<br />";