<?php

class Idea{
    //connect DB
    public $conn;
    private $table = 'ideas';
    private $title;
    private $note;

    //connect with DB by construct
    public function __construct($conn){
        $this->conn = $conn;
    }
    // read record from table
    public function read(){
        $sql = "SELECT * FROM ideas";
        $sth = $this->conn->prepare($sql);
        $sth->execute();
        return $sth;
    }

    // insert record to table
    public function create_idea(){
        $sql = "INSERT INTO ". $this->table . " (title,note) VALUES (:title,:note)";
        $sth = $this->conn->prepare($sql);

        //sanitize users input
        $this->title = htmlspecialchars($this->title);
        $this->note = htmlspecialchars($this->note);

        //bind parameter to pass to SQL query
        $sth->bindParam(':title',$this->title, PDO::PARAM_STR);
        $sth->bindParam(':note',$this->note, PDO::PARAM_STR);
        $sth->execute();
    }
}

?>