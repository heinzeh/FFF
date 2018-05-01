<?php
echo "<table style="width:100%">
  <tr>
    <th>First name</th>
    <th>Last name</th> 
    <th>Username</th>
	<th>Gamertag</th>
	<th>Game type</th>
	<th>Console</th>
	<th>Email</th>
  </tr>"
  
 while($row = mysqli_fetch_array($result))
 {
	 echo "<tr>";
	 echo "<td>" . $row['FirstName'] . "</td>";
	 echo "<td>" . $row['LastName'] . "</td>";
	 echo "<td>" . $row['Username'] . "</td>";
	 echo "<td>" . $row['Gamertag'] . "</td>";
	 echo "<td>" . $row['GameType'] . "</td>";
	 echo "<td>" . $row['Console'] . "</td>";
	 echo "<td>" . $row['Email'] . "</td>";
	 echo "</tr>";
}

echo "</table>";
?>
