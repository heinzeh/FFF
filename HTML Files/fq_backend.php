<?php

    session_start();
        if($_SESSION['loggedin'] == FALSE){
            header("Location:index.php");
        }
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}
table, td, th {
    border: 1px solid black;
    padding: 5px;
}
th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost','root','cs4320','CS4320_Final_Project');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"CS4320_Final_Project");
$sql="SELECT * FROM members WHERE gameType = " . $q . ";";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Console</th>
<th>Gamertag</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['firstName'] . "</td>";
    echo "<td>" . $row['lastName'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['console'] . "</td>";
    echo "<td>" . $row['gamertag'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
