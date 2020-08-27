<?php 

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
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlhalaman} Halaman.";
        
        return $str;
    }
}