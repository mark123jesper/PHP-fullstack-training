
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>PDO - SELECT Query</title>
</head>

<body>
<h1>PDO - SELECT Query</h1>
<?php

    $query = "SELECT * FROM student;";
    $dns = 'mysql:host=localhost;dbname=schooldb';
    $username = 'root';
    $password = 'root';
    try{

        $db = new PDO($dns, $username, $password);

        //Prepared Statement
        $statement = $db->prepare($query);

        //Execute the Query
        $statement->execute();

        //Loop all the records using fetch records
        while ($student = $statement->fetch()) {
            echo "ID: " . $student['ID']."<br />\n";
            echo "NAME: " . $student['NAME']."<br />\n";
        }

        //close the connection to DB
        $statement->closeCursor();

    }catch(Exception $e)
    {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }

?>
</body>
</html>
