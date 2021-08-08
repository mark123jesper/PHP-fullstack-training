<!doctype html>
<html>
<head>
    <title>
        Expressions and Operators
    </title>
</head>
<body>

    <h1>Exercise 2: How to Use the Operators</h1>

    <h2>Decrement a number using Decrement Operator:</h2>
    <?php
        $number = 10;
        echo --$number;
    ?>

    <h2>Show the negative of 5 using Bitwise Operator:</h2>
    <?php
        $number -= 4;
        echo ~$number;
    ?>

    <h2>Execute a dos or linux command using Execution Operator:</h2>
    <?php
        echo `dir`;
    ?>

    <h2>Raise the Error and suppress it using Execution Operators:</h2>
    <?php
        @$error = 1/0;
        echo 'Like Nothing Happened!';
    ?>


    <h2>Show an example of Operator Precedence Operator:</h2>
    <?php
        echo 10 / 2 + 5;
    ?>

</body>
</html>

