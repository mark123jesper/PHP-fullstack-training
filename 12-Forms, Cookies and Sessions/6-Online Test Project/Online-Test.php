
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>Online Test</title>
</head>

<body>
<h1>Online Test</h1>
<?php
$q1 = ( !empty($_GET['q1'] ) ) ?  $_GET['q1']: 0;
$q2 = ( !empty($_GET['q2'] ) ) ?  $_GET['q2']: 0;
$q3 = ( !empty($_GET['q3'] ) ) ?  $_GET['q3']: 0;
$marks = 0;

if($q1 == 1){
    $marks += 10;
}
if($q2 == 1){
    $marks += 10;
}
if($q3 == 1){
    $marks += 10;
}

echo "Result: " . $marks . "<br>";

?>



<form action="index.php" method="get">

    <fieldset>

        <legend>Online Test</legend>
        <p>
            What is JS Stands for?<br>
            <input type="radio" name="q1" value="1" checked> JavaScript<br>
            <input type="radio" name="q1" value="0"> JavaSight<br>
        </p>
        <p>
            What is HTML stands for?<br>
            <input type="radio" name="q2" value="0" checked> HyperText Transport Protocol<br>
            <input type="radio" name="q2" value="1"> Hyper Text Transfer Protocol<br>
        </p>

        <p>
            What is CSS stands for?<br>
            <input type="radio" name="q3" value="1" checked> Cascaded Style sheet<br>
            <input type="radio" name="q3" value="0"> Cascaded Single Sheet!<br>
        </p>

    </fieldset>

    <p><input type="submit"> &nbsp;&nbsp; <input type="reset"></p>
</form>
</body>
</html>
