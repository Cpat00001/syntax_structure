<?php

// podaj dynamicznie nazwe strony/kategorii z URL , 
//wtedy dynamicznie mozesz podawac filtry wyszukiwania do kazdej,podajac jako $var do filters.php
// a w filters do $args_color_size_destination jako product_cat podasz wynik wlasnie ze zmiennej
// echo "<h5>". $get_path ."</h5>";
$c = $get_path['filename'];
//$c = pathinfo(__FILE__);
//var_dump($c);
$b = $_SERVER['PHP_SELF'];
//echo "<h1>Rzuc wynik " . $c ."</h1>";
echo "<br>";
$find = '-';
$d = strpos($c,$find);
$d_plus_one = intval($d) + 1;
//var_dump($d_plus_one);
$sl = strlen($c);
$dl = intval($sl - $d_plus_one);
//catch string after "-" dash, it your proaduct-cat
$chop_string = substr($c,-$dl);
//echo "<h5>wystepuje w numerze: </h5> " . $d . " string length:" . $sl . "<br> dlugosc str:" . $dl ; 
echo "<br>";
//var_dump($chop_string);
$up_chop_string = ucfirst($chop_string);
// jesli masz juz zlapany string dynamicznie po wystepujacym page-{} to podaj to do WP_QUERY


?>