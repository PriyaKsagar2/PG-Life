<?php
// Create a new mysqli object
$conn = new mysqli('localhost', 'id22419370_root', 'Pglifedb@hk8', 'id22419370_pglife');

// Check if the connection was successful
if ($conn->connect_error) {
  // Log the error to the server's error log
  error_log("Failed to connect to MySQL: " . $conn->connect_error);
  // Return a generic error message to the user
  echo "Failed to connect to the database. Please try again later.";
  exit; // Stop execution
}