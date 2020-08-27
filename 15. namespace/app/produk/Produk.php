<?php 

abstract class Produk {
    private $judul,
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
    
    abstract public function getInfoProduk ();
    
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

    public function getHarga ()
    {
        return $this -> harga - ( $this->harga * $this->diskon / 100);
    }
}
