<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $phone = $_POST['phone'];
    $campus = $_POST['campus'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $ieee_member = $_POST['ieee_member'];
    $ieee_number = $ieee_member === 'yes' ? $_POST['ieee_number'] : null;
    $email = $_POST['email'];

    // Database connection
    require_once 'config.php'; // Assuming config.php contains database connection logic

    // Prepare the SQL Insert statement
    $sql = "INSERT INTO registrations (name, usn, phone, campus, branch, year, ieee_member, ieee_number, email)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('MySQL prepare error: ' . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sssssssss", $name, $usn, $phone, $campus, $branch, $year, $ieee_member, $ieee_number, $email);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful!'); window.location.href='success.html';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
