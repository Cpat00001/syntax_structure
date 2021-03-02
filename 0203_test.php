<?php declare(strict_types=1);  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
        echo "<h1>test -> refresher pure php</h1>";

        $a = array('Pat'=>35,"Mat"=>24);
        $b = json_encode($a);
        echo $b;
        //convert back to array()
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $c = json_decode($jsonobj,true);
        echo "<br>";
        var_dump($c);

        $d = $c["Peter"];
        echo "<br>".$d;
        $e = $c["Joe"];
        echo "<br>".$e;
        
        //looping JSON
        $o = '{"Tom":20,"Tim":21,"Tony":22}';
        var_dump($o);
        echo "<br>";
        $f = json_decode($o);
        echo print_r($f);
        foreach($f as $row){
            echo $row. "<br>";
        }
        $arr = array("Peter" => 30,"Piotr"=> 32, "Maciek" =>32);

        function kv($arg,$mac){
            foreach($arg as $key => $value){
                echo $key . " => " . $value . "</br>";
            }
            // loop array
            if(!isset($mac)){
                echo "data is not submitted, sorry";
            }else{
                foreach($mac as $key => $value){
                    echo $key . " is " . $value . " years old </br>"; 
                }
            }
            return;
        }
        kv($f,$arr);

//arguments
        function x ($types = array(), $coffemachine = NULL){
            $urzadzenie = is_null($coffemachine)? "recznie" : $coffemachine;
            echo "In order to prepare " . $types . " you need to use " . $urzadzenie ;       
        }
    x("kawa", "mlynek");

    echo "<br><br>";

    function y ($arg1, $arg2){
        return "I love " . $arg1 . " but I'm not big fan of " . $arg2 .  ".\n";
    }
    $fru = array("banana","kiwi");
    echo y(...$fru);
    echo "<br><br>";

    $word = "six";
    $s = strlen($word);

    switch($s){
        case 5;
        echo "input is 4 characters lengh";
        break;
        case 4;
        echo "input is 4 characters lengh";
        break;
        case 3;
        echo "input is 3 characters lengh";
        break;
        default:
        echo "Number of characters is less than 3 or more than 5";
    }
    echo "</br>";
      // strict declaration must be declared as first line at the top of file
    //   declare(strict_types=1);

    function xy (int $arg1, int $arg2){
        return $arg1 + $arg2;
    }
    // if one of given argument is string will give an error/warning that both args must be integer => int
    echo xy(5, 5);
    echo "</br>";

    // argument by reference &
    function xyz(&$val){
        return $val += 5;
    }
    $nu = 8;
    echo xyz($nu);

    // sorting arrays
    $fruits = array("kiwi","banana","apple");
    $sorting = sort($fruits);
    echo "</br>";
    $fruitslength = count($fruits);
    //echo $fruitslength;
    echo "</br>";

    for($x = 0; $x <$fruitslength; $x++){
        echo $fruits[$x] . "</br>";
    }




?>
</body>
</html>