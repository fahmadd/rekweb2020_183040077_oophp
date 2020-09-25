<?php 

class Produk {

	public 	$judul,
			$penulis,
			$penerbit;

	protected $diskon = 0;

	private $harga;

	public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getHarga () {
		 return $this->harga;
	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		return $str;
	}




}


class Komik extends Produk {
	public $jmlHalaman;

	public function __construct ($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0, $jmlHalaman = 0) {

		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk() {
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}


class Game extends Produk {
	public $waktuBermain;

	public function __construct ($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0, $waktuBermain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuBermain = $waktuBermain;
	}

	public function getInfoProduk() {
		$str = "Game : ". parent::getInfoProduk() . " ~ {$this->waktuBermain} Jam.";
		return $str;
	}

	public function setDiskon ($diskon) {
		return $this->getHarga() - ($this->getHarga() * $diskon / 100 );
	}
}


class CetakInfoProduk {

	public function cetak (Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} ( Rp.{$produk->harga})";
		return $str;
	}
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "csgo";
// var_dump($produk2->judul);


$produk1 = new Komik("Sasuke","Masashi Kishimoto","Shonen Jump",1000,175);
$produk2 = new Game("Valorant","Riot Games","Riot Games",10000,2000);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

echo $produk2->setDiskon(50);
echo "<br>";
echo $produk2->getHarga();

?>