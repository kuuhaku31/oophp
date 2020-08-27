<?php 

class Produk {
    public $judul,
        $creator,
        $penerbit,
        $harga,
        $jmlhalaman,
        $jammain,
        $tipe; 

    public function __construct ( $judul = 'judul', $creator = 'creator', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0, $jammain = 0, $tipe = 'tipe')
    {
        $this -> judul = $judul;
        $this -> creator = $creator;
        $this -> penerbit = $penerbit;
        $this -> harga = $harga;
        $this -> jmlhalaman = $jmlhalaman;
        $this -> jammain = $jammain;
        $this -> tipe = $tipe;
    }
    
    public function getLabel ()
    {
        return "$this->creator, $this->penerbit";
    }
    
    public function infoLengkap ()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ( $this->tipe == "komik" ) {
            $str .= " - {$this->jmlhalaman} Halaman.";
        } else if ( $this->game == "game" ) {
            $str .= " ~ {$this->jammain} Jam.";
        }

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

$produk1 = new Produk('one piece', 'eiichiro oda', 'shonen jump', 30000, 100, 0, "komik");
$produk2 = new Produk('god of war', 'santa monica studio', 'sony entertaintment', 500000, 0, 500, "game");


echo "Komik : $produk1->creator, $produk2->penerbit";
echo "<br>";
echo $produk1 -> getLabel();
echo "<br>";

$infoProduk1 = new CetakInfo();
echo $infoProduk1->cetak($produk1);
echo "<br>";

$infoProduk1 = new CetakInfo();
echo $infoProduk1->cetak($produk2);
