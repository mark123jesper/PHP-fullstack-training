<!doctype html>
<html>
<head>
    <title>
        Data Types
    </title>
</head>
<body>

<h1>Exercise 1: Use All Data Types</h1>

<h2>Calculate the area using Length and breath using Integer:</h2>
<?php
    $length = 10;
    $breath = 20;
    $area = $length * $breath;
    echo $area . PHP_EOL;
?>

<h2>Calculate Student Exact Marks Percentage with Double:</h2>
<?php

    $maths = 45;
    $science = 35;
    $total = $maths + $science;
    $totalMarks = 200;
    $percentage = $total / $totalMarks;
    echo $percentage;

?>

<h2>Check if the user has admin roles:</h2>
<?php

    $userName = "John, Smith";
    $hasRoles = null;
    $adminRoles = "Admin";
    $userRoles = "Admin";

    $hasRoles = ( $userRoles === $adminRoles );
    echo ($hasRoles) ? "$userName has Admin Role" : "$userName has not Admin Role";

?>


<h2>Define and Display a User Name using Strings:</h2>

<?php

    $firstName = "John";
    $lastName = "Smith";
    $fullName = $firstName . ", " . $lastName;
    echo $fullName;

?>

<h2>Check if the variable is null or not:</h2>
<?php

    $inputValue = "This is a test Value";
    $hasValue = is_null($inputValue);
    //Check if not null
    echo ( !$hasValue ) ? "Input has Value" : "Input is Empty";

?>

</body>
</html>

