
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>mysqli - Table</title>
</head>

<body>
<h1>mysqli - Table</h1>
<hr>
<h1>DISPLAY - TABLE ENTRIES</h1>
<?php

    $query = "SELECT * FROM student;";

    $hostname = 'localhost';
    $db_name = 'schooldb';
    $username = 'root';
    $password = 'root';

    try{

        $db = new mysqli($hostname, $username, $password, $db_name);

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        //Select Query
        $result = $db->query($query);

        echo '<table>';
        echo '<th>ID</th>';
        echo '<th>NAME</th>';

        //Loop all the records using fetch records
        while ($student = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>" . $student['ID'] .  "</td>";
                echo "<td>" . $student['NAME'] . "</td>";
            echo "</tr>";
        }
        echo '</table>';

        //close the connection to DB
        $db->close();

    }catch(Exception $e)
    {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }

?>

<hr>

<!-- HTML FORM STARTS HERE -->
<h1>ADD - TABLE ENTRIES</h1>
<form action="add.php" method="get">

    <fieldset>

        <legend>Student Form</legend>
        <p>
            <label for="id">ID:</label>
            <input name ="id" type="text" placeholder="Text">
        </p>
        <p>
            <label for="name">Name:</label>
            <input name ="name" type="text">
        </p>
    </fieldset>
    <p><input type="submit" value="Add New Record"> &nbsp;&nbsp; <input type="reset"></p>
</form>
<hr>
<h1>EDIT - TABLE ENTRIES</h1>

    <?php

    $query = "SELECT * FROM student;";

    $hostname = 'localhost';
    $db_name = 'schooldb';
    $username = 'root';
    $password = 'root';

    try{

        $db = new mysqli($hostname, $username, $password, $db_name);

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        //Select Query
        $result = $db->query($query);


        echo '<table>';
        echo '<th>#</th>';
        echo '<th>ID</th>';
        echo '<th>NAME</th>';
        echo '<th>OPERATION</th>';


        //Loop all the records using fetch records
        while ($student = $result->fetch_assoc()) {
            echo "<tr><form action=\"edit.php\" method=\"get\">";
                echo "<td><input type='hidden' name='id' value='" . $student['ID'] .  "' ></td>";
                echo "<td><input type='text' value='" . $student['ID'] .  "' disabled></td>";
                echo "<td><input type='text' name='name' value='" . $student['NAME'] . "'></td>";
                echo "<td><input type=\"submit\" value=\"Edit\"></td>";
            echo "</tr></form>";
        }

        echo '</table><hr>';


        //close the connection to DB
        $db->close();

    }catch(Exception $e)
    {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }

    ?>

<h1>DELETE - TABLE ENTRIES</h1>
<?php

$query = "SELECT * FROM student;";

$hostname = 'localhost';
$db_name = 'schooldb';
$username = 'root';
$password = 'root';

try{

    $db = new mysqli($hostname, $username, $password, $db_name);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    //Select Query
    $result = $db->query($query);

    echo '<table>';
    echo '<th>#</th>';
    echo '<th>ID</th>';
    echo '<th>NAME</th>';
    echo '<th>OPERATION</th>';


    //Loop all the records using fetch records
    while ($student = $result->fetch_assoc()) {
        echo "<tr><form action=\"delete.php\" method=\"get\">";
        echo "<td><input type='hidden' name='id' value='" . $student['ID'] .  "' ></td>";
        echo "<td><input type='text' value='" . $student['ID'] .  "' disabled></td>";
        echo "<td><input type='text' name='name' value='" . $student['NAME'] . "' disabled></td>";
        echo "<td><input type=\"submit\" value=\"Delete\"></td>";
        echo "</tr></form>";
    }

    echo '</table><hr><br><br>';


    //close the connection to DB
    $db->close();

}catch(Exception $e)
{
    $error_message = $e->getMessage();
    echo "<p>Error message: $error_message </p>";
}

?>

</body>
</html>