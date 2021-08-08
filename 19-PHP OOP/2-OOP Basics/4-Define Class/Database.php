<?php


class Database
{
    public $dbConnection;
    public $records;

    //This function can be used to open the connection with the database
    function openConnection() : bool{}

    //This function can be used to fetch records from database
    function fetchRecord($id) : array{}

    //Insert Records
    function insertRecords($data): bool {}

    //Update Records
    function updateRecords($id): bool {}

    //Delete Records
    function deleteRecords($id): bool {}
}

