<?php

class Database {

    protected $dsn = "mysql:host=localhost;dbname=php_oop";
    protected $user = "root";
    protected $pass = "";
    protected $conn;

    public function __construct() {
        try {
            $this->conn = new PDO($this->dsn,$this->user,$this->pass);
            echo 'Connection Success!';
        } 
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getData($table, $where){
        
        $sql = "SELECT * FROM ".$table." WHERE ".$where;          
        $prepare = $this->conn->query($sql);
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function updateData($table, $update_value, $where){
        $sql = "UPDATE ".$table." SET ".$update_value." WHERE ".$where;        
        $prepare = $this->conn->query($sql);
        if($prepare == true){
            return true;
        }else{
            return false;
        }
    }

    function createData($table, $columns, $values){
        $sql = "INSERT INTO ".$table." ".$columns." VALUES ".$values;        
        $prepare = $this->conn->query($sql);
        if($prepare == true){
            return $prepare;
        }else{
            return false;
        }
    }

    function deleteData($table, $filter){
        $sql =  "DELETE FROM ".$table." ".$filter;  
        $prepare = $this->conn->query($sql);
        if($prepare == true){
            return true;
        }else{
            return false;
        }
    }
   
}



?>