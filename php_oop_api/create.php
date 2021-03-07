<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');
header('Content-Type:application/json');

//bring files Database && Idea
include_once 'database.php';
include_once 'idea.php';

//instantiate DB and Idea model
$db = new Database();
$dbconnected = $db->connection();
$idea = new Idea($dbconnected);
$received = json_decode(file_get_contents("php://input"));
//var_dump($received);
// assign values
$idea->title = $received->title;
$idea->note = $received->note;
//create Idea and pass $idea to create_idea() in idea.php
$idea->create_idea();

?>