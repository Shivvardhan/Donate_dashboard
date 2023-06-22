<?php
include "dbcon.php";
// error_reporting(0);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {





     // Get the submitted credentials from the login form
     $username = $_POST['username'] ?? '';
     $password = $_POST['password'] ?? '';
     $password = md5($password);
     // Create a database connection
   
     // Check for database connection errors
     if ($conn->connect_error) {
          die("Database connection failed: " . $conn->connect_error);
     }

     // Prepare the SQL statement to retrieve the password from the database
     $sql = "SELECT password FROM users WHERE username = ?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->store_result();

     // Check if a row was returned
     if ($stmt->num_rows == 1) {
          // Bind the result to a variable
          $stmt->bind_result($hashedPassword);
          $stmt->fetch();

          // Verify the password
          if (password_verify($password, $hashedPassword)) {
               // Redirect to another page if the credentials are correct
               header("Location: anotherpage.php");
               exit();
          }
     }

     // Display an error message if the credentials are incorrect or user doesn't exist
     echo "Invalid username or password. Please try again.";
}
