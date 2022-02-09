<?php 


interface Energy
{
    public function run();
    public function jump();
}

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
//klasa dziedzicy po dashbordzie i roszerza o metode work 
class Forest extends Dashboard 
{ 

    //policz wysilek dodatkowego biegacza
    public function addRunners($args){

        // $total = $runnerOne;
        echo "Licze total wysilek biegaczy: <br>";
        
        $dystans = [];

        foreach($args as $key => $value){
            
            //var_dump([$value][0]->run);
            var_dump([$value][0]);
           
            
            echo "<br><br>";
           
        }
    }

    public function work(){
        $work = $this->run * $this->lift;
        return $work;
    }
}

$r = new RunnerOne(5,1);
// echo("Wynik z RunnerOne: " . $r->jump() . "<br>");
$r2 = new RunnerTwo(3,1);
$args = [$r,$r2];
$m = new Forest(2,2);
// echo("Total Runners: " . $m->addRunners(new RunnerOne(5,5),new RunnerTwo(3,3)));
$m->addRunners($args);


// $a = new Dashboard(2,4);
// echo($a->run());
// echo "<br>";
// echo($a->jump());
// echo "<br>";
// $m = new Mlyn(2,5);
// echo("Praca w mlynie: " . $m->work());

