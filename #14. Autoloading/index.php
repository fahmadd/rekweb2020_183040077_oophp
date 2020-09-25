<?php 

require_once 'App/init.php';


$produk1 = new Komik("Sasuke","Masashi Kishimoto","Shonen Jump",125000,175);
$produk2 = new Game("Valorant","Riot Games","Riot Games",150000,2000);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetakProduk();

 ?>