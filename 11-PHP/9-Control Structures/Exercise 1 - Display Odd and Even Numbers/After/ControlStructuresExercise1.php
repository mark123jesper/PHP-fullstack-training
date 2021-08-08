<!doctype html>
<html>
<head>
    <title>
        Control Structures
    </title>
</head>
<body>

    <h1>Exercise 1: Display Odd and Even Numbers</h1>
    <table>
        <tr>
            <td>Number</td>
            <td>Odd</td>
            <td>Even</td>
        </tr>
    <?php
        require_once "MyConfigFile.php";
        for($counter = 1; $counter <= MyConfigFile\MAX_NUMBERS ; $counter++) {
            $result = $counter%2;
            echo "<tr>";
            echo "<td>$counter</td>";
            if( $result == 0){
                echo "<td>No</td>";
                echo "<td>Yes</td>";
            }else{
                echo "<td>Yes</td>";
                echo "<td>No</td>";
            }
            echo "</tr>";
        }
     ?>

    </table>

</body>
</html>

