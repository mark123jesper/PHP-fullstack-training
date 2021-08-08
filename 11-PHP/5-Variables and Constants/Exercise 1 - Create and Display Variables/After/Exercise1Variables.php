<!doctype html>
<html>
<head>
    <title>
        Variables
    </title>
</head>
<body>

    <h1>Exercise 1: Create and Display Variables</h1>
    <?php
        $name = "John, Smith";
        echo $name;
    ?>

    <h2>String Variable:</h2>
    <?= $name ?>

    <h2>Integer Variable:</h2>
    <?php
        $counter = 10;
        echo $counter;
    ?>

    <h2>Print Variable from Function:</h2>
    <?php
        function print_counter(){
            $message = "Welcome to PHP Variables!";
            echo $message;
        }
        print_counter();
    ?>

    <h2>Static Variable:</h2>
    <?php

        static $flag = 10;
        echo $flag;
    ?>
    <h2>Global Variable:</h2>
    <?php
        global $version;
        $version = 7.3;
        echo $GLOBALS['version'];
    ?>

    <h2>Super Global Variable:</h2>
    <?= $GLOBALS['version']; ?>


    <h2>Variables of Variables:</h2>
    <?php
        $name = "John, Smith";
        $student = "name";
        echo "Student name is $$student";
    ?>

</body>
</html>

