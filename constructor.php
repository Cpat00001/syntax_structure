<?php

// scope

//global scope used in a function

// function aaa($a){

//     if(!isset($a)){
//         $a = 1;
//     }else{
//         $a = $a;
//     }
//     return $a;
// }
// $b = aaa(3);
// echo($b);
    

//static variable + recursive function
// function foo(){
//     static $int = 1;
//     static $int = 1+2;

//     $int++;
//     echo $int;
// }
// foo();

// function test(){

//     static $count = 0;
//     $count++;

//     if($count <= 10){
//         echo $count . '<br>';
//         test();
//     }
//     $count--;
// }
// test();
// function test(){

//     static $a = 0;
//     print_r($a);
//     $a++;
// }
// $b = test();

// $a = 6;

// class random{

//     function aaa(){
//         global $a;
//         return $a * $a;
//     }
// }
// $x = new random();
// echo($x->aaa());

// $a = 1;
// $b = 2;

// function sum(){
//     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
// }
// sum();
// print_r($b); //print 3

// $a = 1;
// $b = 2;

// function test(){

//     global $a , $b;
//     return $a + $b; 
// }
// $c = test();
// print_r($c); //outputs 3 as sum of global $a,$b used in function

// $a = 'global scope';

// function test(){
//     // $a = 'local scope in function';
//     echo $a;
// }
// test();//does not print $a value from test() as it is not declared locally

// $abc = 'access to $abc from another file and printed out';
// include 'overloading.php';

// function one(){
//     $a = 'inside variable<br>';
// }
// $a = 'outside variable<br>';
// one();
// print_r($a); //'outside var printed out'

// exception

// define("MIN_PRICE",100);

// class CheckPrice extends Exception{

//     public function __construct($message){
//         parent::__construct($message);
//     }
// };

// $newPrice = 80;

// try{
//     if($newPrice < 100){
//         throw new CheckPrice('Stary Twoja cena jest zbyt niska');
//     }
// }catch( CheckPrice $e){
//     echo $e->getMessage();
// }

// function error_handler($errstring, $errno, $errfile, $line) {
//     throw new ErrorException($errstring, $errno, $errfile, $line);
// }
// set_error_handler("error_handler");

// function ZeroDiv($a,$b){
        
//     $c = $a/$b;
//     echo 'Result: ' . $c;
// }

// try{
//     ZeroDiv(10,0);
// }catch(ErrorException $e){
//     echo 'Blad wystapił:';
//     echo $e->getMessage();
// }


//printing expression ONLY PHP 8.0 && above
// class SpecException extends Exception{};

// function some_function(){
//     echo 'just random text as exceptrion output<br>';
// }

// function tester(){
//     some_function() or throw new SpecException('Oops i did it again<br>');
// }
// try{
//     tester();
// }catch(Exception $e){
//     print $e->getMessage();
// }

//omitting caught expression ONLY PHP 8.0 && above
// class ABCException extends Exception{};

// class xyz{

//     public function tester(){
//         try{
//             throw new ABCException('heelo masz blad');
//         }catch(ABCException){
//             print 'ABCException was thrown without calling "caught variable"';
//         }
//     }
// }
// $a = new xyz();
// $a->tester();

//multi exception

// class TestException extends Exception{};

// class SecondTestException extends Exception{};

// class abc{
//     public function tester(){
//         try{
//             throw new TestException();
//         }catch(TestException | SecondTestException $e){
//             var_dump(get_class($e));
//         }
//     }
// }
// $a = new abc();
// $a->tester(); 


//nested exception
// class TestException extends Exception{};

// class Test{

//     public function abc(){
//         try{
//             try{
//                 throw new TestException('masz blad');
//             }catch(TestException $e){
//                 throw $e;
//             }
//         }catch(Exception $e){
//             var_dump($e->getMessage());
//         }
//     }
// }
// $a = new Test();
// $a->abc();

//try catch finally block
// function test(){
//     try{
//         throw new Exception('abc');
//     }catch( Exception $e){
//         $e->getMessage();
//     }finally{
//         echo 'finally section';
//     }
// }
// test();

// class Test{

//     private $number;

//     public function __construct($number){

//         $this->number = $number;
//     }
//     public function cn($number){

//     // var_dump($this->number);
//         if($this->number > $number){
//             throw new Exception('Number cannot be over ' . $number);
//         }else{

//             echo 'Number is OK';
//             return true;
//         }
//     }
// }
// $a = new Test(3);
// $a->cn(5);
//var_dump($a);


//interfacec

// interface Door{

//     public function material();
//     public function color();
// }
// interface Window{

//     public function size();
//     public function frame();
// }
// interface Heating{

//     public function gas();
//     public function electric();
// }
// class House implements Door, Window, Heating{

//     public function material() { echo "Wood<br>";}
//     public function color() { echo "Neutral<br>";}

//     public function size() { echo "Big House<br>";}
//     public function frame() { echo "Medium size window<br>";}

//     public function gas() { echo " Gas heaters are expensive<br>";}
//     public function electric() { echo "Electric heaters can be cheap - if renewable energy<br>";}
// }

// $h = new House();

// echo  $h->material() . "<br>" . $h->color() . "<br>" .$h->size(). "<br>" . $h->electric();



//abstract class
// abstract class Furniture{

//     abstract protected function item($material);

// }
// class Chair extends Furniture{

//     public function item($material , $currency = '$$'){

//         if($material == 'wood'){
//             $price = 100; 
//         }elseif($material == 'playwood'){
//             $price = 50;
//         }else{
//             $price = 65;
//         }
//         return $material . " we sell at price of " . $price . $currency;
//     }
// }
// $a = new Chair();
// echo $a->item('plastic');


// abstract class Build{

//     protected $wood = 0;
//     protected $concrete = 0;

//     public abstract function constructionSite();
// }
// class House extends Build{

//     private $size;

//     public function __construct($wood , $concrete , $size){
//         $this->wood = $wood;
//         $this->concrete = $concrete;
//         $this->size = $size;
//     }
//     public function constructionSite(){
//         return $this->wood * $this->concrete * $this->size;
//     }
// }
// $a = new House(5,5,5);
// echo "To build new house you need " . $a->constructionSite() . "meters of materials(wood and concrete)";






// abstract class Property{

//     public $type;

//     public function __construct($type,$windows){
//         $this->type = $type;
//         $this->windows = $windows;
//     }
//     abstract protected function shortDesc($type, $windows);
// }

// class BigHouse extends Property{

//     public function shortDesc($type , $windows=null) {
//         return "you have chosen: " . $this->type . " of house with " .$this->windows . " windows<br>";
//     }
// }
// class SmallHouse extends Property{

//     public function shortDesc($type , $windows) {
//         return "you have chosen: " . $this->type . " of house with " . $this->windows . " windows<br>";
//     }
// }

// $b = new BigHouse('BIG' , 7);
// echo $b->shortDesc('BIG' , 7);

// $s = new SmallHouse('small', 4);
// echo $s->shortDesc('small', 4);




// abstract class Hello{

//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function welcome() : string;
// }
// class Portuguese extends Hello{

//     public function welcome() : string {
//         return "Welcome in portuguese is " . $this->name . "<br>";
//     }
// }
// class Polski extends Hello{

//     public function welcome() : string{
//         return "Hello po polsku is " . $this->name . "<br>";
//     }
// }
// $p = new Portuguese('bem vinda');
// echo $p->welcome();

// $pol = new Polski('Witaj');
// echo $pol->welcome();



// class Base{

//     public function abc(){
//         echo "Public Function ABC prints some text...";
//     }
//     protected function ddd(){
//         echo "Protected Function DDD prints text...";
//     }
// }
// class SubBase extends Base{

//     public function eee(){
//         echo "Below will output text from parent class function abc...<br>";
//         parent:: abc();
//     }
// }

// $sb = new SubBase();
// echo($sb->eee());

// class Base{
//     function __construct(){
//         echo 'Hello from BASE<br>';
//     }
// }
// class SubBase extends Base{
    
//     function __construct(){
//         parent:: __construct();
//         echo "Hello from SubClass";
//     }
// }
// $b = new Base();
// $sb = new SubBase();

// class AAA{

//     public function printer($string){
//         echo 'Print out from parent class AAA -> string given : ' . $string;
//     }

//     public function printer_two(){
//         echo "Simply text accessed in parent class";
//     }
// }

// class BBB extends AAA{

//     public function printer($string){
//         echo 'BBB class can overwrite methods from parent -> string given changed to ' . $string;
//     }
// }

// $aaa = new AAA();
// $bbb = new BBB();

// $aaa->printer('parent');
// echo "<br>";
// $aaa->printer_two();
// echo "<br>";
// $bbb->printer('child');

// class Sofa{};
// class Chair{};
// class Table{};

// $furniture = [ new Sofa() , new Chair() , new Table,
//                 new Sofa() , new Chair() , new Table ,
//                 new Sofa() , new Chair() , new Table ];
// shuffle($furniture);

// foreach($furniture as $item){

//     if($item instanceof Sofa){
//         echo "This is Sofa object <br>";
//     }elseif( $item instanceof Chair){
//         echo "This is Chair object <br>";
//     }else{
//         echo "This is Table object <br>";
//     }
// }

// $nums = range(1,42);
// shuffle($nums);

// var_dump($ran);

// foreach($nums as $num){
//     echo $num . "<br>";
// }
// foreach($nums as $n){
//     echo $n . "</br>";
// }

// class Math{

//     const PI = 3.14;

//     public function getMath(){
//         return self::PI;
//     }
// }
// $math = new Math();
// echo $math->getMath();
// echo "<br>";
// echo Math::PI;
// echo "<br>";
// define("cars" , [ "Alfa Romeo" , "BMW" , "Citroen" ]);
// echo cars[1];

// class Hello{
//     const PRINT_MSG = "<br> Hello good to see you again";

//     const BYE = "<br>we are sorry you are leaving us";

//     public function sayBye(){
//         echo self::BYE;
//     }
// }
// echo Hello::PRINT_MSG;
// $h = new Hello();
// $h->sayBye();

// class Car{

//     private $car;
//     private $type;
//     private $year;

//     function __construct($car, $type , $year){

//         $this->type = $type;
//         $this->car = $car;
//         $this->year = $year;
//     }

//     public function details(){
//         return 'Manufacturer ' . $this->car . '</br> model ' . $this->type . '<br> produced in ' . $this->year;
//     }
// }
// $a = new Car('Toyota', 'Yaris' , 2017);
// echo($a->details());

// class Friend {

//     private $born;
//     private $name;

//     function __construct($born , $name ){
//         $this->born = $born;
//         $this->name = $name;
//     }
//     public function profile(){
//         return $this->name . " was born in : " . $this->born;
//     }
// }
// $a = new Friend(1982 , "James");
// $b = $a->profile();
// echo $b;

// class One{

//     function __construct($arg){
//         echo "Here is a new element called: " . $arg ;
//     }
// }
// $a = new One("screwdriver");
// echo $a;

// class One{

//     function __construct(){
//         echo "Function called automatically";
//     }
// }

// $a = new One();
// echo $a;
