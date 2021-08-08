<?php namespace Config;


class Database
{
    public $dbConnection;
    function getConnection() : string{
        $dbConnection = "Connection to DB";
        return $dbConnection;
    }
}