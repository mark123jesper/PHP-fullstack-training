<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>Forms - GET</title>
</head>

<body>

<h1>Form - GET</h1>
<a href="index.php">Back to Home Page</a><br>
<?php

$name = $_GET['input_text'];
$email = $_GET['input_email'];

echo "Name: $name and Email: $email";
?>
</body>
</html>