<?php
$serverename="localhost";
$username="root";
$password="password";
$dbname="users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
 die("Connection failed: " . $conn->connect_error);
}
?>