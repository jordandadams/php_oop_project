<?php

require '../classes/addUsersMapper.class.php';

class UsersGet {

    private $usersGetMapper;
    
    function __construct($usersGet) {
        $this->usersGet = $usersGet;
        $this-> createDependentObjects();
    }

    private function createDependentObjects() {
        $this->usersGetMapper = new UsersGetMapper();
    }

    private function insertUser() {
        return $this->usersGetMapper->insertNewUser();
    }
}


?>