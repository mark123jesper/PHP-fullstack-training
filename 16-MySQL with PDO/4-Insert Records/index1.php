<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page Description">
    <title>MySQL PDO</title>
</head>

<body>

	<h1>PDO - Check Connection</h1>
	<?php

		$query = "INSERT INTO `student`(`ID`, `NAME`) VALUES (:ID, :NAME);";

		$dns = "mysql:host=localhost;dbname=schooldb";
		$username = "root";
		$password = "mysql";

		try{

			$db = new PDO($dns, $username, $password);

			//Prepared Statement
			$statement = $db->prepare($query);

			$statement->bindValue(':ID', 4, PDO::PARAM_INT);
			$statement->bindValue(':NAME', 'Wendy', PDO::PARAM_STR);

			//Execute the Query
			if( $statement->execute() ){
				echo "Records Inserted!";
			}else{
				echo "Records NOT Inserted!";
			}


			//Close the Statement
			$statement->closeCursor();



		}catch(Exception $e){
			$error_message = $e->getMessage();
			echo "<p>Error Message: $error_message</p>";
		}


	?>


</body>
</html>