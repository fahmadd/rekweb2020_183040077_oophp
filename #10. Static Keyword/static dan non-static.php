<?php 

class ContohStatic {

	public static $angka = 1;

	public static function tambahAngka(){

		return " Hallo ini static. " . self::$angka++ . "<br>";
	}
}



class IniStatic {

	public static $angka = 1;

	public function tambahAngka(){

		return "Hallo ini static ".self::$angka++ . "<br>";

	}
}

class IniNonStatic{
	public $angka = 1;

	public function tambahAngka(){

		return "Hallo ini bukan static ".$this->angka++ . "<br>";
	}
}


// echo ContohStatic::$angka . "<br>";
// echo ContohStatic::tambahAngka() . "<br>";
// echo ContohStatic::tambahAngka() . "<br>";


$cobaStatic = new IniStatic();
echo $cobaStatic->tambahAngka();
echo $cobaStatic->tambahAngka();
echo $cobaStatic->tambahAngka(). "<br>";

$cobaStatic2 = new IniStatic();
echo $cobaStatic2->tambahAngka();
echo $cobaStatic2->tambahAngka();
echo $cobaStatic2->tambahAngka(). "<hr>";

$cobaNonStatic = new IniNonStatic();
echo $cobaNonStatic->tambahAngka();
echo $cobaNonStatic->tambahAngka();
echo $cobaNonStatic->tambahAngka(). "<br>";

$cobaNonStatic2 = new IniNonStatic();
echo $cobaNonStatic2->tambahAngka();
echo $cobaNonStatic2->tambahAngka();
echo $cobaNonStatic2->tambahAngka(). "<hr>";

?>