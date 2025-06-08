<?php
echo "Welcome to the  stage where we are ready to get connected to a database <br>";

$serverename="localhost";
$username="root";
$password="";
// create a connection
$conn=mysqli_connect($serverename,$username,$password);
echo "connection was successful";
?>