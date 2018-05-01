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
	 echo "<td>" . $row['firstName'] . "</td>";
	 echo "<td>" . $row['lastName'] . "</td>";
	 echo "<td>" . $row['username'] . "</td>";
	 echo "<td>" . $row['gamertag'] . "</td>";
	 echo "<td>" . $row['gameType'] . "</td>";
	 echo "<td>" . $row['console'] . "</td>";
	 echo "<td>" . $row['email'] . "</td>";
	 echo "</tr>";

}

echo "</table>";
?>
