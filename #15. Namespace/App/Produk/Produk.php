<?php 

abstract class Produk {

	protected $judul,
			$penulis,
			$penerbit;

	protected $diskon = 0;

	protected $harga;

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

	abstract public function getInfo();

}
 ?>