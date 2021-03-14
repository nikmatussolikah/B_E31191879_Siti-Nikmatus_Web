<?php 
    /**
     * author Ahmat Davit Ari Dani
     */
    class Item
    {
        private $item;

        public function Ukuran($item)
        {
            $ukuran = $this -> item = $item;
            return "Ukuran : ".$ukuran."<br>";
        }

        public function Warna($item)
        {
            $warna = $this -> item = $item;
            return "Warna : ".$warna."<br>";
        }

        public function Nama($item)
        {
            $Nama = $this -> item = $item;
            return "Nama : ".$Nama."<br>";
        }
    }

    class Topi extends item
    {
        private $model='Pantai';

        public function modelTopi()
        {
            $model= $this -> model;
            return "Model : ".$model."<br>";
        }
    }

    class Celana extends item
    {
        private $tipe='panjang';
        private $model='Jogerpants';

        public function tipeCelana()
        {
            $tipe= $this -> tipe;
            return "Model : ".$tipe."<br>";
        }

        public function modelCelana()
        {
            $model= $this -> model;
            return "Model : ".$model."<br>";
        }
    }

    class Baju extends item
    {
        private $tipe="Kaos";

        public function Tipebaju()
        {
            $tipe= $this -> tipe;
            return "Model : ".$tipe."<br>";
        }
    }

    $Topi = new Topi();
    $Celana = new Topi();
    $Baju = new Baju();

    $baju = $Baju-> Tipebaju();
    $nama = $Baju-> Nama('3second');
    $warna = $Baju-> Warna('hitam');
    $ukuran = $Baju-> Ukuran('L');

    echo "<h3>Produk Baju</h3>";
    echo $baju;
    echo $nama;
    echo $warna;
    echo $ukuran;
?>