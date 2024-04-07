<?php
include "../master.php";
include "db_connect.php";

// Check if action is specified in the URL
if (isset($_GET['action'])) {
    // Check if action is delete
    if ($_GET['action'] === 'delete') {
        // Get user ID to delete
        $user_id = $_GET['user_id'];

        // Get the user's designation_id
        $sql_get_designation = "SELECT designation_id FROM users WHERE id = $user_id";
        $result_get_designation = $conn->query($sql_get_designation);

        if ($result_get_designation->num_rows == 1) {
            $row = $result_get_designation->fetch_assoc();
            $user_designation = intval($row['designation_id']);

            // Check if user's designation_id is one less than session user's designation_id
            if ($session_designation_id !== null && ($session_designation_id - $user_designation === 1)) {
                // SQL to delete user
                $sql_delete = "DELETE FROM users WHERE id = $user_id";
                $conn->query($sql_delete);
            }
        }
    }

    // Check if deactivate button is clicked
    if ($_GET['action'] === 'deactivate') {
        // Get user ID to deactivate
        $user_id = $_GET['user_id'];

        // Get the user's designation_id
        $sql_get_designation = "SELECT designation_id, isActive FROM users WHERE id = $user_id";
        $result_get_designation = $conn->query($sql_get_designation);

        if (
            $result_get_designation->num_rows == 1
        ) {
            $row = $result_get_designation->fetch_assoc();
            $user_designation = intval($row['designation_id']);
            $new_status = $row["isActive"] ? 0 : 1;

            // Check if user's designation_id is one less than session user's designation_id
            if ($session_designation_id !== null && ($session_designation_id - $user_designation === 1)) {
                // SQL to deactivate user
                $sql_deactivate = "UPDATE users SET isActive = $new_status WHERE id = $user_id";
                $conn->query($sql_deactivate);
            }
        }
    }
    header('Location: ../dashboard.php');
}
