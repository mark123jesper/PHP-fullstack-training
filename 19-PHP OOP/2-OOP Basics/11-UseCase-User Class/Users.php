<?php


class Users
{

    function fetchUser($id) : bool
    {

        $result = true;

        echo "Query the Database to select * from users where id=$id" . PHP_EOL;

        echo "Displaying records for $id" . PHP_EOL;

        return $result;

    }

    function deleteUser($id){
        echo "Delete the Records for User ID: $id" . PHP_EOL;
    }

}

$user1 = new Users();
$user1->fetchUser(101);
$user1->fetchUser(102);
$user1->deleteUser(101);