<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Forms - POST</title>
</head>

<body>

<h1>Form - POST</h1>
<a href="index.php">Back to Home Page</a><br>
<?php

$name = $_POST['input_text'];
$email = $_POST['input_email'];

echo "Name: $name and Email: $email";
?>
</body>
</html>