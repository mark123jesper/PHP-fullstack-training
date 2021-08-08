<?php

$id = ( !empty($_GET['id']) ) ? $_GET['id']: "";
$name = ( !empty($_GET['name']) ) ? $_GET['name']: "";


$query = "UPDATE student SET name = '$name' WHERE ID = $id";
$hostname = 'localhost';
$db_name = 'schooldb';
$username = 'root';
$password = 'root';

try{

    $db = new mysqli($hostname, $username, $password, $db_name);

    if ($db->query($query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $db->error;
    }

    //close the connection to DB
    $db->close();


}catch(Exception $e)
{
    $error_message = $e->getMessage();
    echo "<p>Error message: $error_message </p>";
}

?>

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
<a href="index.php">Back to Home</a>

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

</body>
</html>


