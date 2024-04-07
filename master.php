<?php
session_start(); // Start session

// Check if designation_id is not set in session
if (!isset($_SESSION['designation_id'])) {
    // Redirect to access.php
    header('Location: access.php');
    exit();
}

// Get designation_id from session
$session_designation_id = isset($_SESSION['designation_id']) ? intval($_SESSION['designation_id']) : null;
