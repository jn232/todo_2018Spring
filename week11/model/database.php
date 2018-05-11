<?php
    $username = 'jn232';
    $password = 'n3vOIu3e';
    $dsn = "mysql:host=sql.njit.edu;dbname=$username";

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
