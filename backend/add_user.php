<?php
session_start();

include "../master.php";
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $designation = intval($_POST['designation']); // Convert to integer
    $unitName = $_POST['unitName'];
    $password = $_POST['password'];

    // Check if session's designation_id is greater than or equal to selected designation_id
    if ($session_designation_id !== null && ($session_designation_id - $designation === 1)) {
        // Insert user into database
        $sql = "INSERT INTO users (username, phone, designation_id, unitName, password) VALUES ('$username', '$phone', '$designation', '$unitName', '$password')";
        $conn->query($sql);
    }
    header('Location: ../dashboard.php');
}
