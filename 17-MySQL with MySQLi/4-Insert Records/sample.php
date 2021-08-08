
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>Add, Update and Delete Entries from Database</title>
</head>

<body>

<?php

    $id = ( !empty($_GET['id']) ) ? $_GET['id']: "";
    $name = ( !empty($_GET['name']) ) ? $_GET['name']: "";
    $action = ( !empty($_GET['action']) ) ? $_GET['action']: "";

    //Edit the Record



    $query = "SELECT * FROM student;";
    $edit =   "UPDATE student SET student.name = ‘Julie’ WHERE ID = 100; * FROM student;";
    $delete = "SELECT * FROM student;";
    $dns = 'mysql:host=localhost;dbname=schooldb';
    $username = 'root';
    $password = 'root';
    try{

        $db = new PDO($dns, $username, $password);

        //Prepared Statement
        $statement = $db->prepare($query);

        //Execute the Query
        $statement->execute();

        echo '<h1>Table Entries</h1>';
        echo '<table>';
        echo '<th>ID</th>';
        echo '<th>NAME</th>';
        echo '<th>EDIT</th>';
        echo '<th>DELETE</th>';

        //Loop all the records using fetch records
        while ($student = $statement->fetch()) {
            echo "<tr>";
                echo "<td>" . $student['ID'] .  "</td>";
                echo "<td>" . $student['NAME'] . "</td>";
                echo "<td><a href='index.php?action=edit&id=" . $student['ID'] . "'>Edit</a></td>";
                echo "<td><a href='index.php?action=delete&id=" . $student['ID'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo '</table>';

        //close the connection to DB
        $statement->closeCursor();

    }catch(Exception $e)
    {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message </p>";
    }

?>






<!-- HTML FORM STARTS HERE -->
<h1>Add, Update and Delete Entries from Database</h1>
<form action="index.php" method="get">

    <fieldset>

        <legend>Student Enquiry Form</legend>
        <p>
            <label for="input_text">Text:</label>
            <input name ="input_text" type="text" placeholder="Text">
        </p>
        <p>
            <label for="input_email">Email:</label>
            <input name ="input_email" type="email" placeholder="test@domain.com">
        </p>
    </fieldset>

    <p><input type="submit" value="Add New Record"> &nbsp;&nbsp; <input type="reset"></p>
</form>
</body>
</html>
