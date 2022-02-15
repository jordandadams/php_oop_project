<?php

require '../classes/addUsersMapper.class.php';

class UsersGet {

    private $usersGetMapper;
    private $usersInfoArray;
    
    function __construct($usersGet) {
        $this->usersGet = $usersGet;
        $this->usersInfoArray = $usersInfoArray;
        $this-> createDependentObjects();
    }

    private function createDependentObjects() {
        $this->usersGetMapper = new UsersGetMapper($this->usersInfoArray);
    }

    private function insertUser() {
        return $this->usersGetMapper->insertNewUser();
    }
}


?>