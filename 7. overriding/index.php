<?php 

class Produk {
    public $judul,
        $creator,
        $penerbit,
        $harga;

    public function __construct ( $judul = 'judul', $creator = 'creator', $penerbit = 'penerbit', $harga = 0 )
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
    public $jammain;

    public function __construct ( $judul = 'judul', $creator = 'creator', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0 )
    {
        // untuk construct tidak usah diisi supaya tidak menimpa nilai yang diinput
        parent::__construct( $judul, $creator, $penerbit, $harga );
        $this -> jmlhalaman = $jmlhalaman;
    }

    public function getInfoProduk ()
    {
        // mengambil method getInfoProduk dari parent (Produk)
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman.";
        
        return $str;
    }
}

class Game extends Produk {
    public $jammain;

    public function __construct ( $judul = 'judul', $creator = 'creator', $penerbit = 'penerbit', $harga = 0, $jammain = 0 )
    {
        parent::__construct( $judul, $creator, $penerbit, $harga );
        $this -> jammain = $jammain;
    }

    public function getInfoProduk ()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->jammain} Jam.";
        
        return $str;
    }
}

$produk1 = new Komik('one piece', 'eiichiro oda', 'shonen jump', 30000, 100);
$produk2 = new Game('god of war', 'santa monica studio', 'sony entertaintment', 500000, 500);

echo $produk1 -> getInfoProduk();
echo "<br>";
echo $produk2 -> getInfoProduk();
?>