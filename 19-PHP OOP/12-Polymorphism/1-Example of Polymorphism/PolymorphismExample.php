<?php

//Polymorphism example can be shown with interface or abstract class
interface Database{

    //Child Classes must implement this methods.
    function openConnection();

}

class OracleDatabase implements Database{

    //Same Name but Different Form
    function openConnection()
    {
       echo "Using the Oracle Driver to establish the connection";
    }
}

class MySQL implements Database{

    //Same Name but Different Form
    function openConnection()
    {
        echo "Using the MySQL Driver to establish the connection";
    }

}
