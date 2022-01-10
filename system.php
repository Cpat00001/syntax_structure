<?php

class System{
	
	private function get_date()
	{
		return date('Y/m/d');
	}
	private function get_version()
	{
		return phpversion();
	}
	
	public function get_info()
	{
		echo $this->get_date();
		echo "<br>";
		echo $this->get_version();
		
	}
}

$s = new System();
$s->get_info();

#not accesible call to private function()
$s->get_dat();
