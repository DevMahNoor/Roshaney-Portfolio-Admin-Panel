<?php
// Connect to MySQL (without DB first)
$conn = mysqli_connect("localhost", "root", "");

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS portfolio";
mysqli_query($conn, $sql);

// Select Database
mysqli_select_db($conn, "portfolio");

// Create Table
$table = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email varchar (50) NOT NULL, 
    password VARCHAR(255) NOT NULL
)";
mysqli_query($conn, $table);

echo "Database and table created successfully!";
?>