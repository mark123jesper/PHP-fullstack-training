<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 1: String Functions</h1>

<?php

$content = "You can do string operations easily with String Functions";
$findWord = "operations";
$position = -1;

?>

<h2>Find the Given Word in the String (Case Insensitive)</h2>
<?php
$position = stripos($content, $findWord);
if( $position !== false ){
    echo "$findWord has been found!" . PHP_EOL;
}else{
    echo "$findWord has not found!" . PHP_EOL;
}
?>

<h2>Calculate the Length of the String</h2>
<?= strlen($content); ?>

<h2>Remove White Spaces from left in the String</h2>
<?php
$content = "     " . $content;
echo ltrim($content);
?>

<h2>Reverse the String</h2>
<?php
echo strrev($content);
?>

</body>
</html>

