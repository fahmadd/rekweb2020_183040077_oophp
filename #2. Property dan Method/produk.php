<?php 

class Produk {

	public 	$judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

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


$produk3 = new Produk();
$produk3->judul = "Sasuke";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 1000;

$produk4 = new Produk();
$produk4->judul = "Valorant";
$produk4->penulis = "Riot Games";
$produk4->penerbit = "Riot Games";
$produk4->harga = 10000;

echo "Komik : ". $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

 ?>