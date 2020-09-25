<?php 

define ('NAMA','Fikri Ahmad Fauzi'); // diluar kelas

echo NAMA . "<br>";

const NAMA2 = "Fikri Ahmad Fauzi"; // bisa didalam kelas
echo NAMA2;

class Constant {
	const NAMA = "Fikri Ahmad Fauzi";
}

echo "<br>" .Constant::NAMA;


 ?>