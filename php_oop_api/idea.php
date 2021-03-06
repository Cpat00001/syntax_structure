<?php

class Idea{
    //connect DB
    private $conn;
    private $table = 'ideas';

    //properties-> column names in DB table
    public $title;
    public $note;
    public $id;

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
    //read single record() from table
    public function select_one(){
        $sql = "SELECT id,title,note FROM ideas WHERE id = :id";
        $sth = $this->conn->prepare($sql);
        $sth->bindParam(':id',$this->id);
        $sth->execute();
        
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        // var_dump($row);

        //assign values
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->note = $row['note'];
 
    }
    public function select_title(){
        $sql = "SELECT id,title,note FROM ideas WHERE title = :title";
        $sth = $this->conn->prepare($sql);
        $sth->bindParam(':title',$this->title);
        $sth->execute();

        $row = $sth->fetch(PDO::FETCH_ASSOC);
        //var_dump($row);

        //assign values
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->note = $row['note'];
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