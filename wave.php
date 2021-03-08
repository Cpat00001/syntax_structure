<?php
//optional params in function
function example($last_name,$first_name = NULL){
    var_dump($first_name);
	//$first_name = is_null($first_name)? " " : $first_name ;
    //coalescing operator
    $first_name = $first_name ?? null;
	$current_time = date('l jS \of F Y h:i:s A');
	
	$arr = array('first_name' => $first_name, 'last_name' => $last_name, 'time' => $current_time);
	$out = json_encode($arr);
		return $out;
}
//optional second argument
$x = "Tom";
$y = 'Nelson';
echo example($y,$x);

echo "</br>";
echo "Second approach <br>";
//second approach
function optional($user){
 
    $current_time = date('l jS \of F Y h:i:s A');
    $arr = array('first_name' => $user["param1"],'last_name'=> $user["param2"], 'time' => $current_time);
    $out = json_encode($arr);
    return $out;

}
//pass parameters to function => first param $fn is optional
$fn = 'Tim';
$param = (isset($fn)? $fn : null);
$param2 = 'Test';
$user = array("param1" => $param, "param2" => $param2);
echo optional($user);


echo "</br>";
echo "Third approach <br>";
//third approach @@@@@@@@@@@@@@@@@@@@@@@@@@@@
function third($last,$first = NULL){
    $created = date('l jS \of F Y h:i:s A');
    $arr = array("first_name" => $first, "last_name" => $last,"created" => $created);
    $out = json_encode($arr);
    return $out;
}
$first = "Teddy";
$last = "Bear";
//you can pass only one parameter $last, $first as default will be null
echo third($last,$first);

echo "<br>";
echo "Fourth approach<br>";
//fourth approach @@@@@@@@@@@@@@@@@@@@@@@@@@@@
function fourth($req, $opt = "" ){
    $ct = date('l jS \of F Y h:i:s A');
    $arr = array("first_name" => $opt, "last_name" => $req,"created" => $ct);
    $out = json_encode($arr);
    return $out;
}
$a = "FirstName";
$b = "LastName";
echo fourth($b,$a);

?>