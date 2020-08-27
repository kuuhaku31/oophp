<?php 

class Produk {
    public $judul,
        $creator,
        $penerbit,
        $harga,
        $jmlhalaman,
        $jammain;

    public function __construct ( $judul = 'judul', $creator = 'creator', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0, $jammain = 0)
    {
        $this -> judul = $judul;
        $this -> creator = $creator;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
        $this -> jmlhalaman = $jmlhalaman;
        $this -> jammain = $jammain;
    }
    
    public function getLabel ()
    {
        return "$this->creator, $this->penerbit";
    }
    
    public function getInfoProduk ()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class CetakInfo {
    public function cetak (Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public function getInfoProduk ()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
        
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk ()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jammain} Jam.";
        
        return $str;
    }
}

$produk1 = new Komik('one piece', 'eiichiro oda', 'shonen jump', 30000, 100, 0);
$produk2 = new Game('god of war', 'santa monica studio', 'sony entertaintment', 500000, 0, 500);

echo $produk1 -> getInfoProduk();
echo "<br>";
echo $produk2 -> getInfoProduk();
?>