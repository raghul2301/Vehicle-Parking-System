<?php
    include('connection.php');
    $get_data = "SELECT * FROM addvehicle";
    $sql_data = mysqli_query($database, $get_data) or die('error');
    echo "<table border='2'>";
    echo "<tr><th>Owner Name</th><th>Vehicle type</th><th>Company</th><th>Register number</th><th>Token number</th></tr>";
    while ($row = mysqli_fetch_array($sql_data)){
        echo "<tr><td>".$row['Owner_name']."</td>";
        echo "<td>".$row['Vehicle_type']."</td>";
        echo "<td>".$row['company']."</td>";
        echo "<td>".$row['register_number']."</td>";
        echo "<td>TKN".$row['Token_number']."</td>";
        echo "</tr>";
    }
    echo "</table>"
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Parking Data</title>
        <meta charset="utf-8">
        <style>
            body{
                background-color:silver;
            }
        </style>
    </head>
    <body>
    </body>
</html>