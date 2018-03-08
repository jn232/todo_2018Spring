
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
$query = 'SELECT * FROM accounts WHERE id < 6';
     $statement = $conn->prepare($query);
     $statement->execute();
     $accounts = $statements->fetchAll();
     $statement->closeCursor();
$conn = null;
?>

<?php foreach ($accounts as $account) : ?>
     <tr>
       <td><?php echo $account['id']; ?></td>
       <td><?php echo $account['fname']; ?></td>
       <td><?php echo $account['email']; ?></td>
     </tr>
     <?php endforeach; ?>
