<?php 

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

 ?>