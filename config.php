<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error creating database: " . $conn->error;
    $conn->close();
    exit;
}


$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE IF NOT EXISTS skills (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error creating table 'skills': " . $conn->error;
    $conn->close();
    exit;
}


$sql = "CREATE TABLE IF NOT EXISTS projects (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(100) NOT NULL,
    description TEXT
)";
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error creating table 'projects': " . $conn->error;
    $conn->close();
    exit;
}


$sql = "CREATE TABLE IF NOT EXISTS contacts (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20)
)";
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error creating table 'contacts': " . $conn->error;
    $conn->close();
    exit;
}



return $conn;
 
?>
