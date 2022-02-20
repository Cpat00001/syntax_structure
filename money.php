<?php 

class Waluta{

    private $symbol;

    public function __construct($symbol)
    {
        $this->sprawdzSymbol($symbol);
    }
    //sprawd poprawnosc symbolu waluty 3 litery PLN, USD etc
    private function sprawdzSymbol($symbol)
    {
        if(!preg_match('/^[A-Z]{3}$/', $symbol)){
            throw new Exception('Bledny symbol waluty');
        }
        $this->symbol = $symbol;
    }
    public function isoSymbol()
    {
        return $this->symbol;
    }
    //sprawdz czy symbole walut jako obiekty sa sobie rowne
    public function rownoscSymboliWalut(Waluta $waluta)
    {
        return $waluta->isoSymbol() === $this->symbol; 
    }
}
// sprawdz czy symbol waluty jest poprawny
// try{ 
//    $a = new Waluta('USD');
//     echo('Symbol waluty poprawny');
//  }catch(Exception $ex){
//      $msg = $ex->getMessage();
//      echo($msg);
//  }
//  echo "<br>";
//  $sx = $a->isoSymbol();
//  var_dump($sx);

//  echo('<br>Sprawdz czy symbole walut sa sobie rowne<br>');
//  $w1 = new Waluta('USD');
//  var_dump($w1->rownoscSymboliWalut(new Waluta('USD')));

//classa Kwota
class Kwota{

    private $kwota;
    private $waluta;

    public function __construct($k , Waluta $w){
        $this->ustawKwote($k);
        $this->ustawWalute($w);
    }
    private function ustawKwote($k)
    {
        $this->kwota = $k;
    }
    private function ustawWalute(Waluta $w)
    {
        $this->waluta = $w;
    }
    public function kwota()
    {
        return $this->kwota;
    }
    public function waluta()
    {
        return $this->waluta;
    }
    // ustaw niezmiennosc podawanych wartosci
    public static function zKwota(Kwota $aKwota)
    {
        return new self(
            $aKwota->kwota(),
            $aKwota->waluta()
        );
    }
    public static function ofWaluta(Waluta $aWaluta)
    {
        return new self(0 , $aWaluta);
    }
    // dodawanie 
    // public function zwiekszKwote($dodatkowaKwota)
    public function zwiekszKwote(Kwota $kwota)
    {
        //zrob porowanie walut dodawanych kwot
        if($this->waluta != $kwota->waluta()){
             echo "Sumowanie kwot niewykonalne -> chcesz dodac dwie rozne waluty";
            }else{
                echo "Sumowanie kwot w tej samej walucie -> sumowanie";
                return new self(
                    $this->kwota + $kwota->kwota(),
                    $this->waluta()
                );
            }
    }
    //odejmowanie
    public function zmniejszKwote(Kwota $kwota)
    {
            //zrob porowanie walut dodawanych kwot
                if($this->waluta != $kwota->waluta()){
                    echo "Odjemowanie kwot niewykonalne -> chcesz odjac dwie rozne waluty";
                   }else{
                       echo "Odejmowanie kwot w tej samej walucie -> odejmowanie";
                       return new self(
                           $this->kwota - $kwota->kwota(),
                           $this->waluta()
                       );
                   }
    }
    //mnozenie
    public function mnozenie($iloczyn)
    {
        echo "<br>Pokaz iloczyn: </br>" . $iloczyn;
        return $this->kwota * $iloczyn;
    }
    // dzielenie
    public function dzielenie($iloraz)
    {
        echo "<br>Pokaz iloraz: </br>" . $iloraz;
        return $this->kwota/$iloraz;
    } 

    //sprawdz czy Kwata i symbol Waluty sa sobie rowne
    public function rownoscKwotyWaluty(Kwota $kwota)
    {
        return $kwota->waluta()->rownoscSymboliWalut($this->waluta()) && 
                $kwota->kwota() === $this->kwota();
    }
}

// $a = new Kwota(50,new Waluta('EUR'));
// var_dump($a);
// echo "<br><br>";
// $d = $a->zwiekszKwote(new Kwota(50, new Waluta('EUR')));
// echo "<br><br>";
// var_dump($d);
// $od = $a->zmniejszKwote(new Kwota(10 , new Waluta('EUR')));
// var_dump($od);

// $mnoznik = $a->mnozenie(3);
// echo"<br><br>";
// var_dump($mnoznik);
// echo"<br><br>";
// $dzielnik = $a->dzielenie(2);
// var_dump($dzielnik);









