<?php 

class Produk {
    public $judul = 'judul',
        $creator = 'creator',
        $penerbit = 'penerbit',
        $harga = 0 ;


    public function __construct ( $judul, $creator, $penerbit, $harga)
    {
        $this -> judul = $judul;
        $this -> creator = $creator;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
    }
    
    public function getLabel ()
    {
        return "$this->creator, $this->penerbit";
    }
    
}

$produk1 = new Produk('one piece', 'eiichiro oda', 'shonen jump', 30000);
echo "<br><br>";
$produk2 = new Produk('god of war', 'santa monica studio', 'sony entertaintment', 500000);
echo "<br><br>";


echo "Komik : $produk1->creator, $produk2->penerbit";
echo "<br><br>";
echo $produk1 -> getLabel();
echo "<br><br>";
echo $produk2 -> getLabel();
