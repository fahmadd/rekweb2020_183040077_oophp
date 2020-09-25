<?php 

class Produk {

	public 	$judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$jmlWaktu,
			$tipe;

	public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0, $jmlHalaman = 0, $jmlWaktu = 0, $tipe = "tipe") {
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->jmlWaktu = $jmlWaktu;
			$this->tipe = $tipe;
	}
		
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

		if($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";

		} else if ($this->tipe == "Game") {
			$str .= " ~ {$this->jmlWaktu} Jam.";
		}

		return $str;
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


$produk1 = new Produk("Sasuke","Masashi Kishimoto","Shonen Jump",1000,175,0,"Komik");
$produk2 = new Produk("Valorant","Riot Games","Riot Games",10000,0,2000,"Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

 ?>