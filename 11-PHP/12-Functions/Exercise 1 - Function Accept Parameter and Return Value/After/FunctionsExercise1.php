<?php

    function getFullName(String $firstName, String $lastName) : String{
        $fullName = $firstName . ", " .  $lastName;
        return $fullName;
    }

    echo getFullName("John", "Smith");

