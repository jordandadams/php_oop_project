<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../controllers/homeUsers.class.php';

if (isset($_POST)) {
    try {
        $report = new HomeUsers($_POST, $usersInfoArray);
        $result = $report->executeRequest();
        echo json_encode($result);
    } catch (Exception $e) {
        echo $e->getMessage();
        echo json_encode('0');
    }
}

?>