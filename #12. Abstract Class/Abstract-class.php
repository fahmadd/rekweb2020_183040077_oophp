<?php 

abstract class Produk {

	private $judul,
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

	public function getPenulis(){
		return $this->penulis;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function getHarga () {
		 return $this->harga;
	}

	public function setJudul($judul){
		if (!is_string($judul)){
			throw new Exception("Judul Harus String");
			
		}
		$this->judul = $judul;
	}

	public function setPenulis($penulis){
		if (!is_string($judul)){
			throw new Exception("Judul Harus String");	
		}

		$this->penulis = $penulis;
	}

	public function setPenerbit($penerbit){
		if (!is_string($judul)){
			throw new Exception("Judul Harus String");	
		}

		$this->penerbit = $penerbit;
	}

	public function setDiskon($diskon){
		if(!is_integer($diskon)){
			throw new Exception("Harus integer");
		}

		return $this->harga - ($this->harga * $diskon / 100);
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfoProduk();


	public function getInfo() {
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
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
		$str = "Game : ". $this->getInfo() . " ~ {$this->waktuBermain} Jam.";
		return $str;
	}

}


class CetakInfoProduk {

	public $daftarProduk = array();

	public function cetak (Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} ( Rp.{$produk->harga})";
		return $str;
	}

	public function tambahProduk(Produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetakProduk(){
		$str = "DAFTAR PRODUK : <br>";

		foreach($this->daftarProduk as $dp) {
			$str .= "- {$dp->getInfoProduk()} <br>";
		}

		return $str;
	}
}

$produk1 = new Komik("Sasuke","Masashi Kishimoto","Shonen Jump",125000,175);
$produk2 = new Game("Valorant","Riot Games","Riot Games",150000,2000);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetakProduk();
?>