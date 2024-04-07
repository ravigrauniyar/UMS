<?php
session_start();

// Check if session variable is set and not empty
if (isset($_SESSION['designation_id']) && !empty($_SESSION['designation_id'])) {
    // Redirect to dashboard.php
    header('Location: dashboard.php');
    exit; // Make sure to exit after redirecting
} else {
    // Redirect to access.php
    header('Location: access.php');
    exit; // Make sure to exit after redirecting
}
