<?php 

// class CobaStatic {
//     public static $angka = 1;

//     public static function hello ()
//     {
//         return "halo ". self::$angka++ . " kali";
//     }
// }

// echo CobaStatic::hello();
// echo CobaStatic::hello();
// echo CobaStatic::hello();

class Coba {
    public static $angka = 1;
    public function halo ()
    {
        return "halo ". self::$angka++ . " kali <br>";
    }
}

$obj = new Coba();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Coba();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();