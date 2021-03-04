<?php

header("Access-Control-Allow-Origin: *");
header("Contnet-Type: application/json;charset=UTF-8");

include_once 'database.php';
include_once 'idea.php';

//instantiate DB
$db = new Database();
$db_conn = $db->connection();

//bring idea class
$i = new Idea($db_conn);
//perform query from ideas->read() and count() result;
$stmt = $i->read();
//empty array to be fulfilled with data
$ideas = array();
//fetch_assoc to get associated array 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    //var_dump($row);

    $idea_row = array(
        'id' => $id,
        'title' => $title,
        'note' => $note
    );
    //var_dump($idea_row);
    //insert data into array
    array_push($ideas,$idea_row);
}
//convert array() to json object
$out = json_encode($ideas);
echo $out;

?>