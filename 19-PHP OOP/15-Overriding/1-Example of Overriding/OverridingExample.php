<?php

class Database{

    function getConnection(){
        echo 'Default it is connected to MQSQL.' .PHP_EOL;
    }
}

class Oracle extends Database{

    //Override the method.
    function getConnection(){
        echo 'Modify the connection to support Oracle' .PHP_EOL;
    }

}

$db1 = new Database();
$db2 = new Oracle();
$db1->getConnection();
$db2->getConnection();