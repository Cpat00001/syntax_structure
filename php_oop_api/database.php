<?php
//database connection
class Database{

    // properties to connect DB
    private $host = 'localhost';
    private $db = 'ideas_crud1';
    private $password = '123456';
    private $username = 'root';

    //connection to DB
    public $conn;
    public function connection(){
         try{
            $conn = new PDO('mysql:host=' . $this->host . ';dbname=' .$this->db ,$this->username, $this->password);
            //$conn = new PDO('mysql:host=localhost;dbname=ideas_crud1', $this->username, $this->password);
            echo "connected";
            
        }catch(PDOExecption $e ){
            print "Error DB not connected: " . $e->getMessage(). "</br>"; 
        }
        return $conn;
    }
}
$a = new Database();
$a->connection();

?>