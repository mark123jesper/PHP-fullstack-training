
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>mysqli - SELECT Query</title>
</head>

<body>
<h1>mysqli - SELECT Query</h1>
<?php

    $query = "SELECT * FROM student";
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


        //Loop all the records using fetch records
        while ($student = $result->fetch_assoc()) {
            echo "ID: " . $student['ID']."<br />\n";
            echo "NAME: " . $student['NAME']."<br />\n";
        }

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
