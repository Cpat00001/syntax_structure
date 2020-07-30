<!DOCTYPE html>
<html>

<body>

  <?php

  class A
  {
    public static $word = "slowo sportowe";
  }
  class B extends A
  {

    // public function __construct()
    // {
    //   echo parent::$word;
    // }
    public function x()
    {
      echo parent::$word;
    }
  }
  //new B();
  $a = new B();
  $a->x();

  // class Auto1
  // {
  //   public static function drive()
  //   {
  //     echo "electric driving <br>";
  //   }
  // }
  // class Auto2 extends Auto1
  // {
  //   public $name;

  //   public function __construct()
  //   {
  //     $this->name = parent::drive();
  //   }
  //   public function __destruct()
  //   {
  //     echo "pocalujcie mnie w odwlok";
  //   }
  // }
  // new Auto2();

  //######### static methods
  // class Auto
  // {
  //   public static function name()
  //   {
  //     echo "This is Hi-Tech auto";
  //   }
  //   public function __construct()
  //   {
  //     self::name();
  //   }
  // }
  // class Auto2
  // {
  //   // public function aaa()
  //   // {
  //   //   Auto::name();
  //   // }
  //   public function __construct()
  //   {
  //     Auto::name();
  //   }
  // }
  // new Auto2();
  // $a = new Auto2();
  // $a->aaa();


  // class Kotek
  // {
  //   public static function abc()
  //   {
  //     echo "Hello World";
  //   }
  //   public function __construct()
  //   {
  //     self::abc();
  //   }
  // }
  // new Kotek();
  // class Kotek
  // {
  //   public static function abc()
  //   {
  //     echo "Hello Kitty";
  //   }
  // }
  // Kotek::abc();


  // ####### constant
  // class ABC
  // {
  //   const BYE = "speak soon";
  // }
  // echo "<h1>" . ABC::BYE . "</h1>";

  // class DEF
  // {
  //   const HOME = 'This is your home';

  //   public function text()
  //   {
  //     echo self::HOME;
  //   }
  // }
  // $a = new DEF();
  // $a->text();

  // class Auto
  // {
  //   public $name;
  //   public $color;

  //   public function __construct($a, $b)
  //   {
  //     $this->name = $a;
  //     $this->color = $b;
  //   }
  //   public function intro()
  //   {
  //     echo "name: {$this->name}, color: {$this->color}";
  //   }
  // }
  // class Model extends Auto
  // {
  //   public $body;

  //   public function __construct($a, $b, $d)
  //   {
  //     $this->name = $a;
  //     $this->color = $b;
  //     $this->body = $d;
  //   }
  //   public function intro()
  //   {
  //     echo "name: {$this->name}, color: {$this->color}, body: {$this->body}";
  //   }
  // }
  // $x = new Model('citroen', 'red', 'pickup');
  // echo $x->intro();

  // class Fruit
  // {
  //   public $name;
  //   public $color;

  //   public function set_name($name)
  //   {
  //     $this->name = $name;
  //   }
  //   public function get_name()
  //   {
  //     return $this->name;
  //   }
  //   public function set_color($color)
  //   {
  //     $this->color = $color;
  //   }
  //   public function get_color()
  //   {
  //     return $this->color;
  //   }
  // }

  // $pomo = new Fruit();
  // $pomo->set_name('pomo');
  // $pomo->set_color('red');
  // echo "</br>";
  // echo "This " . $pomo->get_name() . " has a color: " . $pomo->get_color();

  // ######################################
  // class Fruit
  // {
  //   public $name;

  //   public function set_name($name)
  //   {
  //     $this->name = $name;
  //   }
  //   public function get_name()
  //   {
  //     return $this->name;
  //   }
  // }

  // $fruit1 = new Fruit();
  // $fruit1->set_name('Apple');

  // echo $fruit1->get_name();
  // echo "<br><br>";
  // $fruit1->set_name('Banana');
  // echo $fruit1->get_name();

  //##################################

  // class Fruit
  // {
  //   public $name;
  //   public $color;

  //   function __construct($name, $color)
  //   {
  //     $this->name = $name;
  //     $this->color = $color;
  //   }
  //   function get_name()
  //   {
  //     return $this->name;
  //   }
  //   function get_color()
  //   {
  //     return $this->color;
  //   }
  // }
  // $a = new Fruit("Banan", "yellow");
  // echo "This fruit is called: " . $a->get_name() . " and has " . $a->get_color() . " color!";

  // ########### destructor ###################

  // class Fruit
  // {
  //   public $name;
  //   public $color;

  //   function __construct($name, $color)
  //   {
  //     $this->name = $name;
  //     $this->color = $color;
  //   }
  //   function __destruct()
  //   {
  //     echo "Automatically called: name: {$this->name} and color: {$this->color}";
  //   }
  // }

  // $a = new Fruit('Jablko', 'zielone');

  // access modifiers
  // class fruit
  // {
  //   public $name;
  //   public $color;
  //   public $size;

  //   function set_name($n)
  //   {
  //     $this->name = $n;
  //   }
  //   function set_color($c)
  //   {
  //     $this->color = $c;
  //   }
  //   private function set_size($s)
  //   {
  //     $this->size = $s;
  //   }
  // }
  // $a = new fruit();
  // $a->set_name('owoc');
  // $a->set_color('zielony');
  //  ############# inheritance

  // class Car
  // {
  //   public $model;
  //   public $color;

  //   public function __construct($model, $color, $brand)
  //   {
  //     $this->model = $model;
  //     $this->color = $color;
  //     $this->brand = $brand;
  //   }
  //   public function dashboard()
  //   {
  //     echo "you are watching model {$this->model} and you have chosen {$this->color} color";
  //   }
  // }
  // class Renault extends Car
  // {
  //   public function message()
  //   {
  //     echo "Nice to see you in our {$this->brand} showroom.";
  //   }
  // }

  // $a = new Renault('Twingo', 'yellow', 'Renault');
  // echo $a->message();
  // echo "<br>";
  // echo $a->dashboard();

  // class Car
  // {
  //   public $model;
  //   public $color;
  //   public $brand;
  //   public $key;

  //   public function __construct($model, $color, $key)
  //   {
  //     $this->model = $model;
  //     $this->color = $color;
  //     $this->key = $key;
  //   }
  //   protected function welcome()
  //   {
  //     echo "you have key {$this->key}, you have an access";
  //   }
  // }
  // class Citroen extends Car
  // {
  //   public function aaa()
  //   {
  //     echo "open door...";
  //     $this->welcome();
  //   }
  // }
  // $a = new Citroen('C4', 'red', '1234');
  // $a->aaa();

  // class szablon
  // {
  //   public $nazwa;
  //   public $lokalizacja;
  //   public $sektor;

  //   public function __construct($n, $l, $s)
  //   {
  //     $this->nazwa = $n;
  //     $this->lokalizacja = $l;
  //     $this->sektor = $s;
  //   }
  //   protected function sekretSzablonu()
  //   {
  //     echo "Majac dostep do kopii mozesz poznac szablon {$this->nazwa} | {$this->lokalizacja} | {$this->sektor}";
  //   }
  // }
  // class Kopia1 extends szablon
  // {
  //   public function info()
  //   {
  //     echo "info z kopii, udostepniam dane z szablonu";
  //     $this->sekretSzablonu();
  //   }
  // }

  // $a = new Kopia1('kopia1', 'warminskie', 'automotive');
  // $a->info();
  // $b = new szablon('szablon1', 'dolnoslaskie', 'software');
  // $b->sekretSzablonu();
  ?>

</body>