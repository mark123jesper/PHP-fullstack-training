<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

<h1>Exercise 1: Easy Table Calculator</h1>
<table align="left" border="1" cellpadding="3" cellspacing="3">
    <?php
    for($tablenum=1; $tablenum<=10; $tablenum++)
    {
        echo "<tr>";
        for ($value=1; $value<=10; $value++)
        {
            echo "<td>$tablenum * $value = ".$tablenum * $value."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

