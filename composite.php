<?php 


interface Energy
{
    public function run();
    public function jump();
}

//lisc
class Dashboard implements Energy
{

    public $run;
    public $lift;

    public function __construct(int $run,int $lift) {
        $this->run = $run;
        $this->lift = $lift;
    }
    public function run(){

        $dzul = $this->run * 2;
        return $dzul;
    }
    public function jump(){
        
        $dzul = $this->lift * 4;
        return $dzul;
    }
}
//contener => dziedziczy po dashbordzie i dodaje funkcje
// suma wszystkich Runnersow
class Forest extends Dashboard 
{ 
    //policz wysilek dodatkowego biegacza
    public function addRunners($args)
    {
        echo "Total wysilek biegaczy: <br>";
            //var_dump($args);
            $liczbaRunnersow = 0;
            $totalRun = 0;
            $totalLift = 0;
        foreach($args as $key => $value){
            $liczbaRunnersow = count($args);
            $totalRun += $value->run;
            $totalLift += $value->lift; 
        }   
        return "Suma odległosci: ". $totalRun . " suma Liftów: " . $totalLift . " Liczba runnersów: " . $liczbaRunnersow;
    }

    public function work()
    {
        $work = $this->run * $this->lift;
        return $work;
    }
    /* 
        done => zlicz sume wszystkich biegaczy
        done => policz sume ich wysilku -> bieganie/dystans i jumps - w sumie juz to masz
        policz sume ich wysilku * liczba Dzuli przypisanych do czynnosci, 
        dzieki temu masz totaldzule
    */
    public function totalDzuleBieganie($args)
    {
        $totalDzuleBieganie = 0;

        foreach($args as $key => $value)
        {
            $totalDzuleBieganie += ($value->run) * 2;
            // var_dump($totalDzuleBieganie);
        }
        echo "<br>Total energii przy bieganiu => liczba biegaczy * jednostka odleglosci * dżule: <b> " . $totalDzuleBieganie . "</b>";
        return $totalDzuleBieganie;
        
    }
    // suma wykonanych jump/lifts przez zawodnikow * ilosc dżuli
    public function totalDzuleJump($args)
    {
        $totalDzuleJump = 0;
        foreach($args as $key => $value)
        {
            $totalDzuleJump += ($value->lift) * 4;
        }
        echo "Total liczba jumps * dżule to...: <b>" . $totalDzuleJump . "</b> ";
        return $totalDzuleJump;
    }

}
//runnerOne
class RunnerOne implements Energy
{
    public function __construct(int $run,int $lift) {
        $this->run = $run;
        $this->lift = $lift;
    }
    public function run(){

        $dzul = $this->run * 2;
        return $dzul;
    }
    public function jump(){
        
        $dzul = $this->lift * 4;
        return $dzul;
    }
}
//runnerTwo
class RunnerTwo implements Energy
{
    public function __construct($run , $lift) {
        $this->run = $run;
        $this->lift = $lift;
    }
    public function run(){

        $dzul = $this->run * 2;
        return $dzul;
    }
    public function jump(){
        
        $dzul = $this->lift * 4;
        return $dzul;
    }
}
//runnerTwo
class RunnerThree implements Energy
{
    public function __construct($run , $lift) {
        $this->run = $run;
        $this->lift = $lift;
    }
    public function run(){

        $dzul = $this->run * 2;
        return $dzul;
    }
    public function jump(){
        
        $dzul = $this->lift * 4;
        return $dzul;
    }
}

$r = new RunnerOne(5,1);
$r2 = new RunnerTwo(3,1);
$r3 = new RunnerThree(10,10);
// echo("Dzule za bieganie Runner_3  " . $r3->run());
$args = [$r,$r2,$r3];
$m = new Forest(2,2);
//echo sumaryczny wysilek nowych zawodnikow -> biegi/dystans + podnoszenie
echo($m->addRunners($args));

$fd = new Forest(1,1);
echo($fd->jump());
echo "<br> Work: " . $fd->work();
// sumaryczna ilosc Dźuli liczba zawodnikow * liczba biegania/dystans * liczba Dżuli/energii
$fd->totalDzuleBieganie($args);
echo "<br>";
// sumaryczna ilosc Dźuli liczba zawodnikow * liczba skoków * liczba Dżuli/energii 
$fd->totalDzuleJump($args);


// $a = new Dashboard(2,4);
// echo($a->run());
// echo "<br>";
// echo($a->jump());
// echo "<br>";
// $m = new Mlyn(2,5);
// echo("Praca w mlynie: " . $m->work());

