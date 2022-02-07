<?php

//strategy pattern

class Base 
{
    private $strategia;

    function __construct(Strategia $strategia){
        $this->strategia = $strategia;
    }
    public function mikser() : void{
        echo "Dodaj skladniki w proporcjach:<br>";
        $rezultat = $this->strategia->wymieszaj(["truskawka","jablko","malina","gruszka"]);
        foreach($rezultat as $res){
            echo $res . "<br>";
        }
    }
}

interface Strategia{
    public function wymieszaj(array $dane);
}

class SzczesliwyMix implements Strategia{
    
    public function wymieszaj($dane):array{
        shuffle($dane);
        return $dane;
    }
}
class Gruszkowy implements Strategia{

    public function wymieszaj($dane):array{
        sort($dane);
        return $dane;
    }
}

class Truskawkowy implements Strategia
{
    public function wymieszaj($dane){
        rsort($dane);
        return $dane;
    }
}

//$a = new Base(new SzczesliwyMix());
//$a = new Base(new Gruszkowy());
// echo "Szczesliwy Mix <br>";
//$a = new Base(new SzczesliwyMix());
// echo "Gruszkowy <br>";
// $a = new Base(new Gruszkowy());
echo "Truskawkowy sok <br>";
$a = new Base(new Truskawkowy());
echo($a->mikser());
