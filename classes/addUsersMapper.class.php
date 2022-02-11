<?php

require '../database/database.php';

class addUsersMapper {

    private $dbObject;

    function __construct() {
        $this->createDependentObjects();
    }

    private function createDependentObjects() {
        $this->dbObject = new Database(); //instantiating Database class from database.php
    }

    private function createData($table, $columns, $values){
        $sql = "INSERT INTO ".$table." ".$columns." VALUES ".$values;        
        $prepare = $this->dbObject->conn->query($sql);
        if($prepare == true){
            return $prepare;
        }else{
            return false;
        }
    }

    public function totalRowCount() {
        $sql = "SELECT * FROM users";
        $prepare = $this->dbObject->conn->prepare($sql);
        $prepare->execute();
        $t_rows = $prepare->rowCount();

        return $t_rows;
    }

}

    $ob = new addUsersMapper();
    echo $ob->totalRowCount();

?>