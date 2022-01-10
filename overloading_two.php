<?php

class One{
	
	private function abc(){
		
		$args = func_get_args();
		//var_dump($args);
		
		if(empty($args)){
				//echo 'Sorry empty set of arguments';
				return 0;
			}
		
		$sum = null;
			
		foreach ($args as $arg) {
            $sum += $arg;
        }
		//var_dump($sum);
        return $sum;
		}
	
	public function def($x, $y){
		$this->abc($x , $y);
	}
}

$a = new One();
$a->def(4,4);


