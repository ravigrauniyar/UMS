<?php
include "master.php";
include "backend/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .sidebar {
            width: 200px;
            height: 40vh;
            display: flex;
            flex-direction: column;
            gap: 30px;
            padding: 50px 5px;
            background-color: #acb9ca;
            font-weight: bold;
            text-transform: uppercase;
        }

        .sidebar div {
            border: 1px solid black;
            text-align: center;
            width: 100%;
        }

        /* CSS for styling the account management button */
        .account-btns {
            display: flex;
            justify-content: end;
            gap: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="account-btns">
        <button>Change Password</button>

        <!-- Logout button -->
        <form action="backend/logout.php" method="post">
            <button type="submit">Logout</button>
        </form>
    </div>
    <div style="display: flex;">
        <div class="sidebar">
            <div>Designation</div>
            <div>View Data</div>
            <div>Create User</div>
        </div>
        <div>
            <?php include "./frontend/add_user.php"; ?>
            <?php include "./frontend/users_list.php"; ?>
        </div>
    </div>
</body>

</html>