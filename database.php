<?php
$conn = mysqli_connect("mysql","root"," ",null);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "connected successfully.<br>";
$sql = "CREATE DATABASE students";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn -> select_db("students");

$sql = "CREATE TABLE information (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL,
    passwd VARCHAR(30) NOT NULL,
    email VARCHAR(50)
    
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
$conn->close();
?>