<?php

    function validate($email) {
        return preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/", $email);
    }

    echo validate("test");
    echo validate("test@");
    echo validate("test@gmail.com");