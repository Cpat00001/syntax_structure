<?php

class magazyn{
    //static
public static $item1 = "kabel diameter: 30cm";
public static $item2 = "gniazdko angielskie";

public function dostepnoscMagazyn(){
    echo "na magazynie czesc : ".self::$item1. " jest dostepna";
}
}
$a = new magazyn;
echo $a->dostepnoscMagazyn();

class uKlienta extends magazyn{
    public function zapotrzebowanie(){
        echo "<br> u klienta ".parent::$item1. " jest niedostepna";
    }
}
$b = new uKlienta();
echo $b->zapotrzebowanie(); 

?>