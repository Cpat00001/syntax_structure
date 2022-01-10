<?php


class Base {
	
	public $name = "Base";
	protected $id = 6124;
	private $is_definied = "yest";
}

class Derived extends Base {
	
	public function info(){
		echo "This is derived class";
		echo "<br>";
		echo $this->name . "\n";
		echo "<br>";
		echo $this->id . "\n";
		echo "<br>";
		echo $this->is_definied;
	}
	
}

$derived = new Derived();
$derived->info();



