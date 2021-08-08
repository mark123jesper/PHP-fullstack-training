<!doctype html>
<html>
<head>
    <title>
        Strings
    </title>
</head>
<body>

<h1>Exercise 2: String Functions</h1>
<?php

$content = "You can do string operations easily with String Functions";
$findWord = "operations";
$position = -1;

?>

<h2>Word Wrap the Long String</h2>
<pre>
<?= wordwrap($content, 5); ?>
</pre>


<h2>Find and Replace the word in upper case</h2>
<?= str_replace($findWord, strtoupper($findWord) , $content); ?>

<h2>Count number of words</h2>
<?= str_word_count($content); ?>

<h2>Shuffle the Strings</h2>
<?= str_shuffle($content); ?>

</body>
</html>

