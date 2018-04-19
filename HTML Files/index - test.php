<?php

$host="localhost";
$user="test";
$password="Ncc-1701-a";
$dbname="af_info";

$conn = new mysqli($host, $user, $password, $dbname);
	
if ($conn->connect_error)    
    {
        die ('Could not connect to the database server' . $conn->connect_error);
    }
echo "<h1>Got this far</h1>";

$sql = "SELECT usersinfo.f_name, usersinfo.l_name, usersinfo.username,              usersinfo.password, week_1.llab
            FROM usersinfo 
            JOIN week_1 ON usersinfo.username = week_1.username
            WHERE week_1.llab = 1 OR week_1.llab = 0";


$result = $conn->query($sql);

//Doin the table bullshit here ~~~~~~~~~~~~~~~~~~~~~~~~~~~ //

echo "<table style='border: solid 2px green;'>";
 echo "<tr><th>Firstname</th><th>LastName</th><th>Password</th><th>Week_1</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 2px solid red;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 
//Doin the table bullshit here ~~~~~~~~~~~~~~~~~~~~~~~~~~~ //


try{
    $conn = new

    PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
    { 
        echo $v;
    } 
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

/*if ($result->num_rows > 0) {
    // output data of each row
  
    while($row = $result->fetch_assoc()) {
        echo "<br>". "First Name: ". $row["f_name"]. " Last Name: ". $row["l_name"]. " LLAB: " . $row["llab"] ." Password: " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
</body>
</html>

