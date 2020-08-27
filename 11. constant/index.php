<?php 

// define("NAMA", "musa");
// echo NAMA;

// const UMUR = 17;
// echo UMUR;

class Coba {
    const NAMA = 'musa';
}

echo Coba::NAMA;

// magic constant

class Test {
    public function coba ()
    {
        return __CLASS__;
    }
}

echo Test::class;