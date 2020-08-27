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
        } else if ( $this->tipe == "game" ) {
            $str .= " ~ {$this->jammain} Jam.";
        }

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


echo $produk1 -> infoLengkap();
echo '<br>';
echo $produk2 -> infoLengkap();
