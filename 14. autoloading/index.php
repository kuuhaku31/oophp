<?php 
require 'app/init.php';

$produk1 = new Komik('one piece', 'eiichiro oda', 'shonen jump', 30000, 100);
$produk2 = new Game('god of war', 'santa monica studio', 'sony entertaintment', 500000, 500);

$cetakProduk = new CetakInfo();
$cetakProduk -> tambahProduk($produk1);
$cetakProduk -> tambahProduk($produk2);
echo $cetakProduk -> cetak();

echo "<hr>";
$coba = new coba();