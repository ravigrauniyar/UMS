<?php
$servername = "172.18.0.2";
$username = "user";
$password = "password";
$database = "School";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
