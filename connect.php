<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname="info";

// Create connection
$conn = mysqli_connect($hostname, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>