<?php 

interface infoProduk {
    public function getInfoProduk ();
}

abstract class Produk {
    protected $judul,
            $creator,
            $penerbit,
            $harga;

    protected $diskon = 0;

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
    
    public function getInfo ()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
    
    public function getJudul ()
    {
        return $this->judul;
    }

    public function setJudul( $judul )
    {
        $this -> judul = $judul;
    }

    public function getCreator ()
    {
        return $this->creator;
    }

    public function setCreator ($creator)
    {
        $this -> creator = $creator;
    }

    public function getPenerbit ()
    {
        return $this->penerbit;
    }

    public function setPenerbit ( $penerbit )
    {
        $this -> penerbit = $penerbit;
    }

    abstract public function getHarga();
}

class CetakInfo {
    public $daftarProduk = [];

    public function tambahProduk ( Produk $produk )
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak ()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

class Komik extends Produk implements infoProduk {
    public $jammain;

    public function __construct ( $judul = 'judul', $creator = 'creator', $penerbit = 'penerbit', $harga = 0, $jmlhalaman = 0 )
    {
        // untuk construct tidak usah diisi supaya tidak menimpa nilai yang diinput
        parent::__construct( $judul, $creator, $penerbit, $harga );
        $this -> jmlhalaman = $jmlhalaman;
    }

    public function getHarga ()
    {
        return $this -> harga - ( $this->harga * $this->diskon / 100);
    }

    public function getInfoProduk ()
    {
        // mengambil method getInfoProduk dari parent (Produk)
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlhalaman} Halaman.";
        
        return $str;
    }
}

class Game extends Produk implements infoProduk {
    public $jammain;

    public function __construct ( $judul = 'judul', $creator = 'creator', $penerbit = 'penerbit', $harga = 0, $jammain = 0 )
    {
        parent::__construct( $judul, $creator, $penerbit, $harga );
        $this -> jammain = $jammain;
    }

    public function getHarga ()
    {
        return $this -> harga - ( $this->harga * $this->diskon / 100);
    }

    public function setDiskon ( $diskon )
    {
        $this -> diskon = $diskon;
    }

    public function getInfoProduk ()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->jammain} Jam.";
        
        return $str; 
    }
}

$produk1 = new Komik('one piece', 'eiichiro oda', 'shonen jump', 30000, 100);
$produk2 = new Game('god of war', 'santa monica studio', 'sony entertaintment', 500000, 500);


$cetakProduk = new CetakInfo();
$cetakProduk -> tambahProduk($produk1);
$cetakProduk -> tambahProduk($produk2);
echo $cetakProduk -> cetak();
