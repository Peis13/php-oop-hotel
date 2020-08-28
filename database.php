<?php
require_once(__DIR__ . '/env.php');

// Connect
$conn = new mysqli($server_name, $user_name, $password, $db_name);

// Check connection
if ($conn && $conn->connect_error) {
  // die("Connection failed: " . $conn->connect_error);
  throw new Exception('Connection failed: ' . $conn->connect_error);
}
?>
