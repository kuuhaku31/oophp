<?php 

class Produk {
    public $judul = 'judul',
        $creator = 'creator',
        $penerbit = 'penerbit',
        $harga = 0 ;

    
    public function getLabel ()
    {
        return "$this->creator, $this->penerbit";
    }
    
}

$produk1 = new Produk();
$produk1 -> judul = 'one piece';
$produk1 -> creator = 'eichiro oda';
$produk1 -> penerbit = 'shonen jump';
$produk1 -> harga = 30000;
// var_dump($produk1);

echo "<br><br>";

$produk2 = new Produk();
$produk2 -> judul = 'god of war';
$produk2 -> creator = 'santa monica studio';
$produk2 -> penerbit = 'sony entertainment'; 
$produk2 -> harga = 500000;
// var_dump($produk2);


echo "Komik : $produk1->creator, $produk2->penerbit";
echo "<br><br>";
echo $produk1 -> getLabel();
