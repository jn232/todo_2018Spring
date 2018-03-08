
<?php
echo "<h1>PDO demo!</h1>";
$username = 'jn232' ;
$password = 'n3vOIu3e';
$hostname = 'sql.njit.edu';
$dsn = "mysql:host=$hostname;dbname=$username";
try {
    $conn = new PDO($dsn, $username, $password);
    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$sql = "SELECT * FROM jn232.accounts where id < 6";
$result = $conn->query($sql);
echo 'Results: ' . "$result";
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn = null;
?>
