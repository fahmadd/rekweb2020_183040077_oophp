<?php 

class Game extends Produk implements InfoProduk {
	public $waktuBermain;

	public function __construct ($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0, $waktuBermain = 0){

		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->waktuBermain = $waktuBermain;
	}

	public function getInfoProduk() {
		$str = "Game : ". $this->getInfo() . " ~ {$this->waktuBermain} Jam.";
		return $str;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		return $str;
	}
}

 ?>