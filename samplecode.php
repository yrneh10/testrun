<?php
// Connect to database (replace with actual credentials)
$conn = new mysqli("localhost", "root", "", "testdb");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username from GET parameter
$username = $_GET['username'];

// Improper neutralization of quotes - directly used in SQL
$sql = "SELECT * FROM users WHERE username = '$username'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "User found!";
} else {
    echo "No user found.";
}

$conn->close();
?>
