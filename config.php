<?php

$host = 'localhost';          
$dbname = 'your_database';     
$username = 'root';   
$password = '';   


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO to throw exceptions in case of an error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If connection fails, display the error message
    die("Database connection failed: " . $e->getMessage());
}



