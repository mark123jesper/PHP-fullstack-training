<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sessions</title>
</head>

<body>
<h1>Sessions</h1>
<?php

    session_start();

    //Create a Session
    $_SESSION["firstname"] = "WPFreelancer";

    echo $_SESSION["firstname"];

?>
</body>
</html>