<?php

    //1) Write a function. Return empty if input parameters are empty.
    function checkUserRoles($userRoles) {
        if( empty($userRoles) ){
            echo "Roles cannot be empty" . PHP_EOL;
            return;
        }

        switch ($userRoles){
            case "Admin":
                echo "Hello Admin" . PHP_EOL;
                break;
            case "Editor":
                echo "Hello Editor" . PHP_EOL;
                break;
            default:
                break;
        }
    }

    checkUserRoles("Admin");
    checkUserRoles("");
    checkUserRoles("Editor");
