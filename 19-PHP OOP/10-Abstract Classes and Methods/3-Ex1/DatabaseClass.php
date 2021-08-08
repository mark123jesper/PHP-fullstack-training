<?php

abstract class Database{
    public $connection;
    public $connectionActive = false;

    abstract function setConnection($dbName);
    abstract function getConnection();

}

class DBConnection extends Database{

    //Just by Extending the Database Class you now know what methods to implement for database.
    function setConnection($dbName)
    {
        $this->connectionActive = true;
        $this->connection = "Connection handler to Database" . PHP_EOL;
    }

    function getConnection()
    {
        if($this->connectionActive){
            return $this->connection;
        }
    }
}

$db1 = new DBConnection();
$db1->setConnection("Test");
echo $db1->getConnection();