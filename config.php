<?php
function getConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";

    
    $conn = new mysqli($servername, $username, $password);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "CREATE DATABASE IF NOT EXISTS portifolio";
    if ($conn->query($sql) === TRUE) {
        // echo "Database 'portifolio' created successfully.<br>";
    } else {
        // echo "Error creating database: " . $conn->error . "<br>";
    }

    // Select the database
    $conn->select_db("portifolio");

    // Create the 'skills' table
    $sql = "CREATE TABLE IF NOT EXISTS skills (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        skill VARCHAR(255) NOT NULL,
        description TEXT
    )";
    if ($conn->query($sql) === TRUE) {
        // echo "Table 'skills' created successfully.<br>";
    } else {
        // echo "Error creating table: " . $conn->error . "<br>";
    }

    $sql = "CREATE TABLE IF NOT EXISTS booking (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        email VARCHAR(255) NOT NULL,
        message TEXT NOT NULL,
        service VARCHAR(255) NOT NULL
    )";
    if (!$conn->query($sql) === TRUE) {
      
        echo "Error creating table: " . $conn->error . "<br>";
    }

    $sql = "CREATE TABLE IF NOT EXISTS projects (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT,
        status VARCHAR(50)
    )";
    if (!$conn->query($sql) === TRUE) {
  
        echo "Error creating table: " . $conn->error . "<br>";
    }

    return $conn;
}


?>
