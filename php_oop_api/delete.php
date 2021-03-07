<?php
header('Access-Control-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST');

//bring required files
include_once 'database.php';
include_once 'idea.php';
//instantiate classes db && idea
$db = new Database();
$dbconnected = $db->connection();
$idea = new Idea($dbconnected);

//get id from request
// $idea->id = isset($_POST['id'])? $_POST(['id']) : die();
$received = json_decode(file_get_contents('php://input'));
var_dump($received->id);
//assign value
$idea->id = $received->id;
//pass id to delete() in delete.php
$idea->delete();

if($idea->delete() === true){
    echo "deleted";
}else{
    echo "NOT deleted";
}
?>