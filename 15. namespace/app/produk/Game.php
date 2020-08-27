<?php 

class Game extends Produk {
    public $jammain;

    public function __construct ( $judul = 'judul', $creator = 'creator', $penerbit = 'penerbit', $harga = 0, $jammain = 0 )
    {
        parent::__construct( $judul, $creator, $penerbit, $harga );
        $this -> jammain = $jammain;
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