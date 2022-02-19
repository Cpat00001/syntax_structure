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
try{ 
   $a = new Waluta('USD');
    echo('Symbol waluty poprawny');
 }catch(Exception $ex){
     $msg = $ex->getMessage();
     echo($msg);
 }
 echo "<br>";
 $sx = $a->isoSymbol();
 var_dump($sx);

 echo('<br>Sprawdz czy symbole walut sa sobie rowne<br>');
 $w1 = new Waluta('USD');
 var_dump($w1->rownoscSymboliWalut(new Waluta('EUR')));

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
    public function zwiekszKwote($dodatkowaKwota)
    {
        return new self(
            $this->kwota + $dodatkowaKwota,
            $this->waluta()
        );
    }
    //sprawdz czy Kwata i symbol Waluty sa sobie rowne
    public function rownoscKwotyWaluty(Kwota $kwota)
    {
        return $kwota->waluta()->rownoscSymboliWalut($this->waluta()) && 
                $kwota->kwota() === $this->kwota();
    }
}

$k = new Kwota(111,new Waluta('PLN'));
echo"<br>";
var_dump($k);

echo('<br>porownanie dwoch kwot <br>');
$kk = new Kwota(100 , new Waluta('EUR'));
$nowaKK = $kk->zwiekszKwote(100);
var_dump($kk === $nowaKK);

$kwota = new Kwota(50 , new Waluta('PLN'));
var_dump($kwota->rownoscKwotyWaluty(new Kwota(50, 'PLN')));

// final class Money {

//     private $ilosc;
//     private $waluta;

//     public function __construct(float $ilosc , string $waluta){

//         $this->ilosc = $ilosc;
//         $this->waluta = $waluta;
//     }
//     //ustaw wlasciwa walute
//     public function formatujSymbolWaluty()
//     {   
//         $ilosc = $this->ilosc;
//         return number_format($ilosc , 2, ' , ' , ' . ') + ' ' + $this->waluta;
//     }

//     public function dodawanie($skladnikDwa){

//         $wynikDodawania = $this->ilosc + $skladnikDwa;
//         return $wynikDodawania;
//     }
// }
// final class DSR extends Money{

//     public $wartoscPoczatkowa;

//   public function FIPG( Money $wartoscPoczatkowa){

//     $wartoscPoczatkowa->dodawanie(10);
//     return $wartoscPoczatkowa->formatujSymbolWaluty();
//   }
//   public function __toString()
//   {
//       return $this->$wartoscPoczatkowa;
//   }
// }
// $a = new DSR(10, "PLN" , 10);
// echo($a);



