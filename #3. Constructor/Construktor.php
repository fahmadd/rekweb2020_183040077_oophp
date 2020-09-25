<?php 

class Produk {

	public 	$judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0) {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
	}
		
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "csgo";
// var_dump($produk2->judul);


$produk1 = new Produk("Sasuke","Masashi Kishimoto","Shonen Jump",1000);
$produk2 = new Produk("Valorant","Riot Games","Riot Games",10000);
$produk3 = new Produk("Dota2","Gabe Newell","Valve");


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "Game : " . $produk3->getLabel();
 ?>