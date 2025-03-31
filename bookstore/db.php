<?php
$host = 'localhost';
$db = 'bookstore';
$user = 'root'; // Default XAMPP MySQL user
$pass = ''; // Default password is empty

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
