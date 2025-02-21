<?php
$host = 'localhost'; // Database host
$dbname = 'user_reg'; // Database name
$username = 'root'; // Database username (default for XAMPP)
$password = ''; // Database password (default for XAMPP)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>