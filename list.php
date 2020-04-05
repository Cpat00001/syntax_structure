<?php
echo "<h1>Test. Refresher</h1>";

// static methods && properties
// class showroom{
//     public static $item = "cupboard";
//     public static $warehouse = "mirror";

//     public function outShow(){
//         echo "in a showroom we have one__: ".self::$item;
//     }
// }
// class warehouse extends showroom{
//     public function showStock(){
//         echo "in the warehouse we have only one__: ".parent::$warehouse;
//     }
// }
// $a = new showroom();
// echo $a->outShow();
// echo "</br>";
// $w = new warehouse();
// echo $w->showStock();
// class one{
//     public static $item = "cupboard";
// }
// class two extends one{
//     public function showitem(){
//         echo "we have on stock only one___  ".parent::$item;
//     }
// }
// $a = new two();
// echo $a->showitem();
// class one{
//     public static $item = "screwdriver";

//     public function out(){
//         echo "We have on stock only one___ ", self::$item;
//     }
// }
// $a = new one();
// $a->out();
// class abc{
//     public static $chair = "white color and wood";
//     protected static $bed = "red color and metal";
// }
// echo abc::$chair;
// echo abc::$bed; // expected error no access to protected props outside the class
// class one{
//     public static $name = "Luci Nancy";
// }
// echo one::$name;

// class One{
//     public static function abc(){
//         echo "Edward Root";
//     }
// }
// class Two extends One{
//     public $name;

//     public function __construct(){
//         $this->name = parent::abc();
//     }
// }
// $a = new Two();

// class One{
//     public function abc(){
//         echo "i will be called in cosntruct using self::methodName,
//         then you can call me by instantion Klass";
//     }
//     public function __construct(){
//         self::abc();
//     }
// }
// new One();
// class One{
//     public static function abc(){
//         echo "you can see acces me using clasName::method name";
//     }
// }
// One::abc();


// trait A {
//     public function smallTalk() {
//         echo 'a';
//     }
//     public function bigTalk() {
//         echo 'A';
//     }
// }

// trait B {
//     public function smallTalk() {
//         echo 'b';
//     }
//     public function bigTalk() {
//         echo 'B';
//     }
// }

// class Talker{
//     use A,B{
//         B::smallTalk insteadof A;
//         A:: bigTalk insteadof B;
//     }
// }
// class NextTalker{
//     use A,B{
//         A::smallTalk insteadof B;
//         B::bigTalk insteadof A;
//     }
// }
// $a = new Talker();
// echo $a->smallTalk(); // small b expected
// echo $a->bigTalk(); // capital A expected
// echo "</br>";
// $b = new NextTalker();
// $b->smallTalk(); // small a expected
// $b->bigTalk(); // capital B expected 



//Traits child class can inherit from multiple TRAITS
// class Base{
//     public function hello(){
//         echo "Hello my name is:__";
//     }
// }
// trait sayName{
//     public function Name(){
//         parent::hello();
//         echo "Jack";
//     }
// }
// trait surname{
//     public function saysurname(){
//         echo "  Smith";
//     }
// }
// class Take extends Base{
//     use sayName, surname;
// }
// $a = new Take();
// $a->Name();  
// $a->saysurname();
// class Base{
//     public function hello(){
//         echo "Hello";
//     }
// }
// trait sayWord{
//     public function sayHelloWorld(){
//         parent::hello();
//         echo "World";
//     }
// }
// class SayHelloWorld extends Base{
//     use sayWord;
// }
// $a = new SayHelloWorld();
 

// trait A{
//     public function a(){
//         echo "X";
//     }
// }
// trait B{
//     public function b(){
//         echo "Y";
//     }
// }
// trait C{
//     public function c(){
//         echo "Z";
//     }
// }
// class CollectALL{
    
//         use A,B,C;
// }
// $a = new CollectALL();
// $a->a();
// $a->b();
// $a->c(); // output XYZ
// trait GeneX{
//     public function matX(){
//         echo "X";
//     } 
// }
// trait GeneY{
//     public function matY(){
//         echo "Y";
//     }
// }
// trait GeneZ{
//     public function matZ(){
//         echo "Z";
//     }
// }
// class Dziecko{
//     use GeneX,GeneY,GeneZ;
// }
// $a = new Dziecko();
// echo $a->matX();
// echo $a->matY();
// echo $a->matZ();



//abstract class
// abstract class One{
//     abstract protected function prefixName($name):string;
// }
// class Two extends One{
//     public function prefixName($name, $separator = "."):string{
//         if($name == "Man"){
//             $prefix = "MR";
//         }elseif($name == "Woman"){
//             $prefix = "MS";
//         }else{
//             $prefix = "No title";
//         }
//         return "{$prefix}{$separator}{$name}";
//     }
// }
// $a = new Two();
// echo $a->prefixName("Woman");


// abstract class Rodzic{
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }
// class Dziecko extends Rodzic{
//     public function intro() : string{
//         return "I'm Dziecko and name is: $this->name";
//     }
// }
// class Dziecko2 extends Rodzic{
//     public function intro() : string {
//         return "I'm Dziecko2 and name".$this->name;
//     }
// }
// class Dziecko3 extends Rodzic{
//     public function intro() : string {
//         return "I'm dziecko3 and name:".$this->name;
//     }
// }

// $a = new Dziecko("Olek");
// echo $a->intro();
// echo "</br>";
// $b = new Dziecko2("Amir");
// echo $b->intro();
// echo "</br>";
// $c = new Dziecko3("Adam");
// echo $c->intro();

//constans public / private



// class Goodbay{
//     private const AAA = "some text here";

//     public function abc(){
//         return "you can echo out me,because public function using private const inside class";
//     }
// }
// $a = new Goodbay();
// echo $a->abc();

// class ABC{

//     public const ONE = "one access - public";
//     private const TWO = "two theres no access outside class - private const";
// }
// echo ABC::ONE;
// echo ABC::TWO;

// const ONE = 1;

// class ADD{
//     const TWO = ONE + 1;
//     const THREE = self::TWO + 1;
//     const TEXT = "random text  plus const inner class__". self::THREE;
// }
// $a = new ADD();
// echo $a::TEXT;
// const ONE = 1;

// class C{
//     const TWO = ONE * 2;
//     const THREE = self::TWO + ONE;
//     const TEXT = "some text here plus ".self::THREE;
// }
// $a = new C();
// echo $a:: TEXT;

// class One{
//     const TEXT = "you can see me if you uses constants principles...";
//     public function abc(){
//         return self:: TEXT;
//     }
// }
// $a = new One();
// echo $a->abc();
// echo "</br>";
// echo One::abc();


//final => cannot overwrite class/method
// class One{
//     public $name = "Table";
//     final public function bbb(){
//         echo "name: ". $this->name;
//     }
// }
// class Two extends One{
//     public function bbb(){
//         echo "name: " .$this->name;
//     }
// }
// $a = new Two();
// $a->bbb(); 

//can overwrite methods
// class One{
//     public $name;
//     public $color;


//     public function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function aaa(){
//         return "name ".$this->name." color: ".$this->color; 
//     }
// }
// class Two extends One{
//     //props
//     public $size;

//     public function __construct($name,$color,$size){
//         $this->name = $name;
//         $this->color = $color;
//         $this->size = $size; 
//     }
//     public function aaa(){
//         return "color: ". $this->color." name: ".$this->name." size: ". $this->size. "...";
//     }
// }
// $a = new Two("Sofa","brown","large");
// echo $a->aaa(); 
// class One{
//     public $name;
//     public $color;

//     public function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function abc(){
//         echo "throw name: ".$this->name." and color ".$this->color;
//     }
// }
// class Two extends One{
//     public $weight;

//     public function __construct($name,$color,$weight){
//         $this->name = $name;
//         $this->color = $color;
//         $this->weight = $weight;
//     }
//     public function abc(){
//         echo "throw name: ".$this->name." and color ".$this->color;
//     }
// }
// $a = new Two("Table","White","10kg");
// $a->abc(); 

//inheritance + protected
// class One{
//     public $name;
//     public $color;

//     public function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function abc(){
//         echo "show me color: " .$this->color. " and username " .$this->name;
//     }
// }
// class Two extends One{
//     public function ccc(){
//         return $this->abc();
//     }
// }
// $a = new Two("APACHE","Red");
// echo $a->ccc(); 



// class One{
//     public $name;
//     protected $color;

//     public function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
// }
// class Two extends One{

//     public function takeAll(){
//         echo "I can take from ONE everything example ". $this->color. " and even name ".$this->name;
//     }
// }
// $a = new Two("Tomek","czerwony");
// $a->takeAll();


// public / protected / private access to modifiers
// class Goods{
//     public $color;
//     protected $wood;
//     private $model;
// }
// $a = new Goods();
// $a->color = "White";
// $a->wood = "oak"; // gives an error
// $a->model = "Danniel"; // gives an error

// class Room{
//     public $size = "30m3";
//     protected $color;
//     private $windows;

//     public function __construct($color,$windows){
//         $this->color = $color;
//         $this->windows = $windows;
//     }
//     public function __destruct(){
//         echo "In a rom you can easily change color ". $this->color . " or number of windows " . $this->windows . 
//         " but not easy to change size ". $this->size. "!";
//     }
// }
// $a = new Room('blue',3);

// class Car{
//     public $name = "Ford";
//     public $model;

//     public function __construct($model){
//         $this->model = $model;
//     }
//     public function __destruct(){
//         echo "Manufacturer is : " . $this->name. " and model is ". $this->model;
//     }
// }
// $a = new Car("Focus");


// class User{
//     //props
//     public $name = 'jack';
//     public $age;
//     public $job;

//     public function __construct($age,$job){
//         $this->age = $age;
//         $this->job = $job;
//     }
// }
// $a = new User('33','mechanic');
// echo "Welcome user: ". $a->name. " you are ". $a->age. " and you wors as " . $a->job . " job.";

// class Owoc{
//     public $name;
//     public $color;

//     public function __construct($name){
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }
// $a = new Owoc('Sliwa');
// echo $a->get_name();


//@@@ instanceof
// class Owoc{
//     public $name;
// }
// $a = new Owoc();
// $b = $a->name = "Banana";
// var_dump($b instanceof Owoc);
// echo "</br>";
// var_dump($a instanceof Owoc);

// class Test{
//     public $name;
// }
// $a = new Test();
// $b = $a->name = "Hello";
// echo $b;

// class Car{
//     public $brand;
// }
// $abc = new Car();
// $take = $abc->brand = "Ford";
// echo $take;

// class Fruit{
//     public $color = "black";
//     public $name = "Jack";
//     public $age;

//     public function __construct($age){
//         echo "My name is " . $this->name . " my shirt color is " . $this->color. ".</br>" ;
//         $this->age = $age;
//     }
//     public function someAdds(){
//         echo "My age is ". $this->age;
//     }

// }
// $a = new Fruit(43);
// $a->someAdds(); 

// $intance = new ClassName();
//line above is equal to method used below
// $abc = 'ClassName';
// $insta = new abc();


// class A{

//     function foo(){
//         if(isset($this)){
//             echo "this is defined (";
//             echo  get_class($this);
//             echo ")\n";
//         }else{
//             echo "this is not defined";
//         }
//     }
// }
// class B{
//     function bar(){
//         A::foo();
//     }
// }
// $a = new A();
// $a->foo();
// echo "</br>";
// A::foo();
// echo "</br>";
// $b = new B();
// $b->bar();
// echo "</br>";
// B::bar(); 

// class SimpleCLass{
//     //props
//     public $aa = "default value";

//     //method
//     public function out(){
//         echo "<h1>" . $this->aa . "</h1>";
//     }
// }
// $b = new SimpleClass();
// $b->out();

?>