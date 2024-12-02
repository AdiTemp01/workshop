<?php
$host = 'localhost';
$user = 'root';
$password = 'root'; // Default for MAMP
$database = 'workshop-final';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
