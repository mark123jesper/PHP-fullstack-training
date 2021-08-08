<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cookies</title>
</head>

<body>
    <h1>Cookies</h1>
    <?php

        $cookie_name = "user";
        $cookie_value = "PHPTraining";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        if(!isset($_COOKIE[$cookie_name])) {

            echo "Welcome '" . $cookie_value . "'. Nice to meet you!";

        } else {

            echo "Hey, '" . $cookie_value . "' you are back<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];

        }

    ?>
</body>
</html>