<!doctype html>
<html>
<head>
    <title>
        Constants
    </title>
</head>
<body>

    <h1>Exercise 1: Define and Display Constants</h1>
    <?php

        define( "PROGRAM_INFO", "Exercise with Constants");
        echo PROGRAM_INFO;

    ?>

    <h2>String Constant:</h2>
    <?= PROGRAM_INFO ?>


    <h2>Integer Constant:</h2>
    <?php
        define ( "PROGRAM_VERSION", 1.2);
        $version = PROGRAM_VERSION;
        echo "Program Version: $version";
    ?>

    <h2>Print Constant from Function:</h2>

    <h2>Display Magic Constant:</h2>

</body>
</html>

