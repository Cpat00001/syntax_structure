<?php

header('Access-Control-Allow-Origin:http*');
header('Content-Type:application/json;charset=UTF-8');
header('Access-Control-Allow-Methods: GET');

//bring DB connection and Model
include_once 'database.php';
include_once 'idea.php';

//instantiate db class
$database = new Database();
$db = $database->connection();

//instantiate idea class + connect
$idea_title = new Idea($db);
//var_dump($idea_title);
//get "title" from GET method sent from POSTMAN Url
$idea_title->title = isset($_GET['title']) ? $_GET['title'] : die();
//call function from idea.php for select_title
$result = $idea_title->select_title();
//print_r($result);

//build array as response
$title_array = array(
    'id' => $idea_title->id,
    'title' => $idea_title->title,
    'note' => $idea_title->note
);
//var_dump($title_array);
//convert array into json object
$idea_title_obj = json_encode($title_array);
print_r($idea_title_obj);


?>