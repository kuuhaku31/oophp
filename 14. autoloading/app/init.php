<?php 
// require_once 'produk/infoproduk.php';
// require_once 'produk/Produk.php';
// require_once 'produk/Komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/CetakInfo.php';

spl_autoload_register( function ($class) {  
    require_once __DIR__ . '/produk/' . $class . '.php';
});