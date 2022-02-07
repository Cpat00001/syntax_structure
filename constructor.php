<?php

//MVC strategy

//argument as reference
function a(&$val, &$b): float
{
    $a = $val + $b;
    return $a;
}
$x = 2.555;
$y = 1.111;
var_dump(a($x, $y));
echo "<br>";

//type declaration
function add(float $a, float $b): float
{
    $c = $a + $b;
    return $c;
}
var_dump(add(3, 3.08));
echo "<br>";

function multi(int $a, int $b): int
{
    $c = $a + $b;
    return $c;
}
var_dump(multi(3, 2));
echo "<br>";

function suma(float $a, float $b): float
{

    $z = $a + $b;
    return $z;
}
var_dump(suma(3.14, 3.14));
echo "<br>";

abstract class Auto
{

    abstract public function intro(): string;
    abstract public function color();
}
class Audi extends Auto
{

    private $color;
    private $model;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function intro(): string
    {
        return "Spoko jest lubie $this->model <br>";
    }
    public function color()
    {
        return $this->model . " has color " . $this->color . "<br>";
    }
}
$a = new Audi('A4', 'blekit');
echo ($a->intro());
echo $a->color();

// final class Base{

//     public function abc($a){
//          echo "given parameter is: ". $a;
//     }
// }
// // class Derived extends Base{ //fatal error cannoc inherit after final
// //     public function abc($a){
// //         echo "given parameter is: ". $a;
// //     }
// // }
// $a = new Base();
// echo($a->abc('Raz'));

// class Base{

//     private $name;
//     private $age;

//     public function __construct($name,$age){
//         $this->name = $name;
//         $this->age = $age;
//     }
//     public function hello(){
//         return "Hello my name is: " .$this->name. " and I'm " . $this->age. " old<br>";
//     }
// }
// class Derived extends Base{

//     private $name;
//     private $age;
//     private $mood;

//     public function __construct($name,$age,$mood){

//         $this->name = $name;
//         $this->age = $age;
//         $this->mood = $mood;
//     }
//     public function hello(){
//         return "Hello my name is: " .$this->name. " and I'm " . $this->age. " old and I'm in ".$this->mood." mood<br>";
//     }
// }
// $a = new Base('Tome',30);
// echo($a->hello());
// $b = new Derived('Ola', 25, 'happy');
// echo($b->hello());

// class Fruit{
//     private $name;
//     private $color;

//     function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function msg(){
//       return   "This is " . $this->name . " and has a color " . $this->color." That's it<br> ";
//     }

// }
// class Pear extends Fruit{

//     public function show(){
//         echo 'Czy jestem gruszka czy owocem?<br>';
//         echo "call protected method from Base class<br>";
//         echo $this->msg();
//     }

//     // public function __toString(){}
// }
// $a = new Fruit('Gruszka', 'zolta');
// //echo($a->msg());//error
// $b = new Pear('Grunia','zielona');
// echo($b->show());
//echo($b->msg());//error

// class Base{

//     function __construct(){
//         echo 'Text from BASE class<br>';
//     }
// }
// class Derived extends Base{

//     function __construct(){
//         $this->aaa = parent:: __construct();
//         $this->bbb = 'Here is a TEXT from DERIVED';
//     }

//     function __toString(){
//         return $this->aaa . ' ' . $this->bbb;
//     }
// }
// $a = new Derived();
// echo($a);

// class Cat{};
// class Dog{};
// class Horse{};

// $objects = [ new Cat(), new Dog() , new Horse(),
// new Cat(), new Dog(), new Horse(),new Cat(), new Dog(), new Horse()];

// shuffle($objects);

// foreach($objects as $object){

//     if($object instanceof Cat){
//         echo 'This is a Cat <br>';
//     }elseif($object instanceof Dog){
//         echo 'This is a Dog <br>';
//     }else{
//         echo 'This is a Horse <br>';
//     }
//     // print_r($object);
//     // echo "<br>";
// }
//if($object instanceof Cat){};

// class One{

//     const NAME = 'Olek';

//     public function printer(){
//         echo self::NAME;
//     }
// }
// $a = new One();
// echo($a->printer());
// echo "<br>";
// echo(One::NAME);

// class One{

//     private $name;
//     private $age;

//     function __construct($name , $age){

//         $this->name = $name;
//         $this->age = $age;
//     }
//     public function info(){
//         echo $this->name . " is " . $this->age . " old";
//     }
// }
// $a = new One('Tom' , 34);
// $b = $a->info();
// echo $b;

// class One{

//     function __construct($a){
//         $this->a = $a;
//     }
//     public function __toString(){
//         return "Given parameter is: " . $this->a;
//     }
// }
// $a = new One('Parametr 1');
// echo $a;

// class Rodzic{

//     private function get_date(){
//         return date("Y/m/d");
//     }
//     private function get_version(){
//         return phpversion();
//     }
//     public function show(){

//         $date = $this->get_date();
//         $version = $this->get_version();

//         return "Dzis jest: " . $date . " i mamy php wersje " . $version;
//     }
// }
// $a = new Rodzic();
// // $b = $a->get_date(); // error
// $c = $a->show();
// echo $c;

// class Person{

//     public $name = 'John';
//     protected $surname = 'Doe';
//     private $age = 27; //no access from child class
// }
// class Worker extends Person{

//     public function show(){
//         $this->name;
//         $this->surname;
//         $this->age;

//         echo " First name: ".$this->name;
//         echo "</;>";
//         echo "Second name: " . $this->surname;
//         echo "Age: " . $this->age; // causes an error
//     }
// }
// $a = new Worker();
// $a->show();

// class One{

//     public function setName($name){
//         $this->name = $name;
//     }

//     private function getName(){
//         return '<h1>' . $this->name . '</h1>';
//     }
// }
// $a = new One();
// $a->setName('John Doe');
// $b = $a->getName(); //not accessible private function
// echo $b;

//final

// class A{
//     final public const PI = 3.14;
// }
// class B extends A{
//     public const PI = 3.1415;
// }
// $a = new B();
// echo($a::PI); //Fatal error: Cannot use 'final' as constant modifier
// class Baza{

//     final function abc($a){
//         echo "Welcome to my " . $a;
//     }
// }

// // $a = new Baza();
// // echo($a->abc('home'));
// class SubBaza extends Baza{

//     public function abc($a){
//         echo "you cannot extend " . $a . " function";
//     }
// }
// $a = new SubBaza();
// echo($a->abc('final')); //cannot override final method Baza

// final class Baza{

//     public function abc(){
//         echo "just text";
//     }
// }
// class SubBaza extends Baza{
//     public function abc(){
//         echo "you cannot extend final class -> get an error";
//     }
// }
// $a = new Baza();
// echo($a->abc()); //an error

// class One{
//     final function abc(){
//         echo "just string of text from class One";
//     }
// }
// class Two extends One{

//     function abc(){
//         echo "you cannot extend final function";
//     }
// }
// $a = new Two();
// echo($a->abc()); //gives an error

//traits
// class One{

//     public function Kolory(){
//         echo 'Zielony';
//     }
// }
// trait Mix{
//     public function Kolory(){
//         parent::Kolory();
//         echo ' Niebieski, Zólty';
//     }
// }
// class Two extends One{
//     use Mix;
// }

// $a = new Two();
// echo($a->Kolory());

//static

// class Foo{

//     public static $my_static = 'fiu fiu';

//     public function showStatic(){
//         return self::$my_static;
//     }
// }
// $a = new Foo();
// echo($a->showStatic());

//echo (Foo::$my_static);

// class Dog{

//     public $name;
//     public $breed;

//     public function __construct($name,$breed){
//         $this->name = $name;
//         $this->breed = $breed;
//     }
//     function __toString(){
//         return $this->name . ' is a typical ' . $this->breed;
//     }
//     // function printer(){
//     //     return $this->name . ' is a typical ' . $this->breed;
//     // }
// }
// $a = new Dog('Rocky','boxer');
// $b = new Dog('Bobby', 'kundel');
// print $a;
// echo "<br>";
// echo $b;
//print_r($a);
//echo $a;
// echo $a->printer();

//const + static
// class Example{

//     public static $haslo = 'Czekolada';
//     private static $klucz = ' mrozona z kawa';

//     public static function elo(){
//         echo '<br>pelen dostep: ' . self::$haslo , self::$klucz;
//     }
// }
// echo Example::$haslo;
// echo Example::elo();

// class One{

//     const ABC = 'ABC stala<br>';
// }
// class Two extends One{

//     public static $tester = 'wartosc testera';

//     public static function sprawdzam(){
//         echo parent::ABC;
//         echo self::$tester;
//     }
// }
// $a = new Two();
// echo $a->sprawdzam();

// class Foo{

//     public const BAR = 'BAR';
//     private const TOLEK = 'Tolek';
// }
// echo Foo::BAR;
// echo Foo::TOLEK;

// const ONE = 1;

// class Test{

//     const TWO = ONE * 2;
//     const THREE = ONE + self::TWO;
//     const FOUR = 'Constans FOUR to constns THREE plus 1, czyli: ' . self::THREE + ONE;
// }
// $a = Test::FOUR;
// echo $a;

// class Slonce{

//     const SREDNICA = 12345;

//     public function getSrednica(){
//         return SELF::SREDNICA;
//     }
// }
// $a = new Slonce();
// echo "Srednica slonca to: " . $a->getSrednica();
//echo Slonce::SREDNICA;

//structural => adapter

//italian => to => french

// class French{

//     public function parler(): string
//     {
//         return 'Mowie po francusku';
//     }
// }
// class Italian{
//     public function parlare(): string
//     {
//         return "Mowie po wlosku";
//     }
// }
// class Latin extends French{

//     private $italian;

//     public function __construct(Italian $italian){
//         $this->italian = $italian;
//     }
//     public function parler():string
//     {
//         return "PLATFORMA TLUMACZEN: " . $this->italian->parlare() . " ALE zaraz zmienie wloski na francuski";
//     }
// }
// function tlumaczenie(French $french){
//     echo $french->parler();
// }

// $francuski = new French();
// $fff = tlumaczenie($francuski) . "<br>";
// echo($fff);

// $wloski = new Italian();
// $iii = $wloski->parlare() . "<br>";
// echo($iii);

// $lacina = new Latin($wloski);
// $platform = tlumaczenie($lacina);
// echo($platform);

// class Rev{

//     public function __construct($string){
//         $this->string = $string;
//     }
//     public function convert(){
//         return strrev($this->string);
//     }
// }
// $a = new Rev('Jesli czytasz ten tekst to znaczy poprawnie,ze ADAPTER zadzialal');
// $b = $a->convert();
// echo $b;

// abstract

// abstract class Dom{

//     abstract protected function getName();
//     abstract protected function material($element);

//     public function printOut(){
//         return $this->getName();
//     }
// }
// class threeFive extends Dom{

//     public function getName(){
//         return "35m2<br>";
//     }
//     public function material($element){
//         return "35m2 of {$element} <br>";
//     }
// }
// class sevenZero extends Dom{

//     public function getName(){
//         return "70m2";
//     }
//     public function material($element){
//         return $this->getName() . " of {$element} <br>";
//     }
// }
// $a = new threeFive();
// $a->printOut();
// echo($a->getName());
// echo($a->material('concrete'));

// $b = new sevenZero;
// print_r($b->material('Wood'));

// abstract class abc{

//     abstract protected function getValue();
//     abstract protected function prefix($prefix);

//     public function printer(){
//         print $this->getValue() . "\n";
//     }
// }

// class One extends abc{

//     protected function getValue(){
//         return 'Class One</;>';
//     }
//     public function prefix($prefix){
//         return "{$prefix} Class One<br>";
//     }
// }
// class Two extends abc{

//     public function getValue(){
//         return "class Two<br>";
//     }
//     public function prefix($prefix){
//         return "{$prefix} Class Two<br>";
//     }
// }
// $a = new One;
// $a->printer();
// echo($a->prefix('FOO_'));

// $b = new Two;
// $b->printer();
// echo($b->prefix("ELO__"));

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
