<?php 
// require_once 'produk/infoproduk.php';
// require_once 'produk/Produk.php';
// require_once 'produk/Komik.php';
// require_once 'produk/Game.php';
// require_once 'produk/CetakInfo.php';
// require_once 'produk/User.php';

// require_once 'service/User.php';


/*menyingkat require supaya tidak panjang*/ 
spl_autoload_register( function ($class) { 
    // app\produk\User = ["app", "produk", "user"] 
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/produk/' . $class . '.php';
});

spl_autoload_register( function ($class) {  
    // app\produk\User = ["app", "produk", "user"] 
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/service/' . $class . '.php';
});