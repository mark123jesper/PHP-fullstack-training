
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>Calculator</title>
</head>

<body>
<h1>Calculator</h1>
<?php

    include 'Calculator.php';

    $a = ( !empty($_GET['a'] ) ) ?  $_GET['a']: 0;
    $b = ( !empty($_GET['b'] ) ) ?  $_GET['b']: 0;

    $calc = new Calculator($a, $b);

    echo "Input Value A: $a and $b <br>";
?>


<table border="1">

    <th>Operation</th>
    <th>Value</th>
    <tr>
        <td>Add</td>
        <td><?php echo $calc->add(); ?></td>
    </tr>
    <tr>
        <td>Minus</td>
        <td><?php echo $calc->minus(); ?></td>
    </tr>
    <tr>
        <td>Multiply</td>
        <td><?php echo $calc->multiply(); ?></td>
    </tr>
    <tr>
        <td>Divide</td>
        <td><?php echo $calc->divide(); ?></td>
    </tr>

</table>
<br>
<hr>
<br>
<form action="index.php" method="get">

    <fieldset>

        <legend>Calculator</legend>
        <p>
            Value 1: <input type="text" name="a">
            Value 2: <input type="text" name="b">
        </p>

    </fieldset>

    <p><input type="submit"> &nbsp;&nbsp; <input type="reset"></p>
</form>
</body>
</html>
