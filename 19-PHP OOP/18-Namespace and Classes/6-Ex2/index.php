<?php
require_once "Config\Database.php";
require_once "src\OrderManagement\TrackOrder.php";

use Config\Database as DB;


class view extends DB{

    public function showRecords(){
        return "Able to connect - " . $this->getConnection() . PHP_EOL;
    }
}

$v1 = new view();
$v1->showRecords();

$track = new \TrackOrder();
$track->findOrder(101);

