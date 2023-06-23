<?php
include "dbcon.php";
// error_reporting(0);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {





     // Get the submitted credentials from the login form
     $username = $_POST['username'] ?? '';
     $password = $_POST['password'] ?? '';
     $password = md5($password);
    




     $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->store_result();

// Check if a row was returned
if ($stmt->num_rows == 1) {

     $_SESSION['user'] = $username;
    // User credentials are present in the database
    // Redirect to another page or perform further actions
    header("Location: backend/dashboard.php");
    exit();
} else {
    // User credentials are not present in the database
    // Display an error message or perform further actions
    echo "Invalid username or password.";
}

}
