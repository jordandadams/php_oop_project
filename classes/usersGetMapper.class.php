<?php

require '../database/database.php';

class UsersGetMapper {

    private $dbObject;

    function __construct() {
        $this->createDependentObjects();
    }

    private function createDependentObjects() {
        $this->dbObject = new Database(); //instantiating Database class from database.php
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->dbObject->conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getUsers() {
        $data = array();
        $sql = "SELECT * FROM users";
        $prepare = $this->dbObject->conn->prepare($sql);
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC : returns an array indexed by column name as returned in your result set
        foreach ($result as $row) {
          $data[] = $row;  
        }
        return $data;
    }

    public function insertNewUser($fname, $lname, $email, $phone) {
        $sql = "INSERT INTO users (first_name,last_name,email,phone) VALUES (:fname,:lname,:email,:phone)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'fname'=>$fname,
            'lname'=>$lname,
            'email'=>$email,
            'phone'=>$phone
        ]);

        return true;
    }

    public function totalRowCount() {
        $sql = "SELECT * FROM users";
        $prepare = $this->dbObject->conn->prepare($sql);
        $prepare->execute();
        $t_rows = $prepare->rowCount();

        return $t_rows;
    }

}

    // test methods
    // $ob = new UsersGetMapper();
    // print_r($ob->getUsers());

?>