<?php
$host = 'localhost:3305';
$db = 'tic_tac_toe';
$user = 'root'; // Update with your database username
$pass = ''; // Update with your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>
