<?php

header('Access-Control-Origin:*');
header('Content-Type: application/json; charset=UTF');
header('Access_Control-Allowed_Methods: POST');

//bring files 
include_once 'database.php';
include_once 'idea.php';
//instantiate DB/Idea and connect
$db = new Database();
$dbconnected = $db->connection();
$idea = new Idea($dbconnected);

//capture sent users input/data and convert to json
$received = json_decode(file_get_contents('php://input'));
var_dump($received);
//assign values
$idea->id = $received->id;
$idea->title = $received->title; 
$idea->note = $received->note;
//pass data to update() in idea.php
$idea->update();


?>