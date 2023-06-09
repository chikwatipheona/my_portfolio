<?php
require_once 'config.php';

// Call the getConnection() function to get the database connection
$conn = getConnection();

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



  // Retrieve form data
  $name = $_POST["fullname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $service = $_POST["service"];
  $message = $_POST["message"];

  // Prepare and execute SQL query
  $sql = "INSERT INTO booking (name, phone, email, service, message) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssss", $name, $phone, $email, $service, $message);
  
  if ($stmt->execute()) {
    $response = array("message" => "Data saved successfully!");
    echo json_encode($response);
  } else {
    $response = array("message" => "Error: " . $stmt->error);
    echo json_encode($response);
  }

  $stmt->close();

?>