<?php

// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_quilling_web';

// Create a connection to the database
$conn = new mysqli($localhost, $root, "", $db_quilling_web);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$uname2 = $_POST['u_name'];
$psw2 = $_POST['u_password'];
$email2 = $_POST['u_email'];

// Insert form data into the database
$sql = "INSERT INTO tb_register (u_name, u_password, u_email) VALUES ('$uname2', '$psw2', $email2')";
if ($conn->query($sql) === TRUE) {
echo "Registered successfully!";
} else {
echo "Error" . $conn->error;
}

// Close the database connection
$conn->close();
?>