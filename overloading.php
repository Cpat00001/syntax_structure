<?php 

class Sum {

    public function getSum() {
    
        $args = func_get_args();

        if (empty($args)) return 0;
		
		$sum = null;
		
        foreach ($args as $arg) {
            $sum += $arg;
        }
        return $sum;
    }
}

$s = new Sum();
echo $s->getSum(3, 4) . "\n" ;
