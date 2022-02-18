<?php

require '../classes/usersGet.class.php';

class HomeUsers {

    private $usersInfoArray;
    private $requestArray;

    function __construct($requestArray, $usersInfoArray) {
        $this->requestArray = $requestArray;
        $this->usersInfoArray = $usersInfoArray;
    }

    private function getUsersObject() {
        $users = new UsersGet();
        return $users;
    }

    private function insertUsers() {
        $insertUsers = $this->getUsersObject();
        return $insertUsers->insertUsers();
    }

    public function executeRequest() {
        if ($this->requestArray['request'] == 'insert_user') {
            return $this->insertUsers();
        }
    }

}


?>