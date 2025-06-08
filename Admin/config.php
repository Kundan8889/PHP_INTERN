<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
require 'db.php';

$sel = "SELECT * FROM `users` WHERE `username`='$_POST[username]'";
$que = $con->query($sel);
if ($que->num_rows === 1) {
  $row = $que->fetch_assoc();

  if ($row['password'] === $password) {
    $_SESSION['username'] = $row['username'];
    echo "Login successful. Welcome, " . $row['username'];
  } else {
    echo "Invalid password.";
  }
} else {
  echo "User not found.";
}

$conn->close();
