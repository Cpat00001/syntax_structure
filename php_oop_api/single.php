<?php

header('Access-Control-Allow-Origin: http:*');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Methods: GET');
// header('Access-Control-Max-Age: 3600');


include_once 'database.php';
include_once 'idea.php';

//instantiate database class
$database = new Database();
$dbactive = $database->connection();

//instantiate Idea class
$idea = new Idea($dbactive);
//var_dump($i);
//GET id passed in POSTMAN's url as parameter
$idea->id = isset($_GET['id']) ? $_GET['id'] : die();
$idea->select_one();

//build an array
$idea_array = array(
    'id' => $idea->id,
    'title' => $idea->title,
    'note' => $idea->note 
);
//var_dump($idea_array);
//convert to JSON
print_r(json_encode($idea_array));

?>