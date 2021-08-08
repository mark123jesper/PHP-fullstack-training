<?php

class Database{

    public $db ="Oracle";
    private $dbname = "Students";
    protected $tablename = "tbl_users";

    function hello(){
        return "hello" . PHP_EOL;
    }

    function __debugInfo()
    {
        echo "Taken the control to print the variables." . PHP_EOL;
    }
}

$db = new Database();
var_dump($db);
