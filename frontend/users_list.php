<head>
    <style>
        .users_list_container {
            width: 1000px;
            padding: 0 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th,
        td {
            padding: 8px;
            border: 1px solid black;
            text-align: left;
        }

        a {
            color: black;
            text-decoration: none;
        }

        th {
            background-color: #f2f2f2;
        }

        .status-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: inline-block;
        }

        .status-active {
            background-color: green;
        }

        .status-inactive {
            background-color: yellow;
        }
    </style>
</head>
<div class="users_list_container">
    <p>Existing User Data</p>
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Designation</th>
                <th>Unit Name</th>
                <th>Delete</th>
                <th>Deactivate</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // SQL query to fetch users data
            $sql = "SELECT u.*, d.designation_name 
                    FROM users u 
                    JOIN designation d ON u.designation_id = d.id 
                    WHERE u.designation_id < 5 
                    ORDER BY u.updatedAt DESC";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $serial_number = 1;
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $serial_number . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["designation_name"] . "</td>";
                    echo "<td>" . $row["unitName"] . "</td>";

                    // Delete form
                    echo "<td>";
                    echo "<button>";
                    echo "<a href='backend/action.php?user_id=" . $row['id'] . "&action=delete''>Delete</a>";
                    echo "</button>";
                    echo "</td>";
                    // Deactivate form
                    echo "<td>";
                    echo "<button>";
                    echo "<a href='backend/action.php?user_id=" . $row['id'] . "&action=deactivate" . "'>"
                        . ($row["isActive"] ? "Deactivate" : "Activate")
                        . "</a>";
                    echo "</button>";
                    echo "</form>";
                    echo "</td>";

                    echo "<td>";
                    echo "<span class='status-circle "
                        . ($row["isActive"] ? "status-active" : "status-inactive")
                        . "'></span>";
                    echo "</td>";
                    echo "</tr>";
                    $serial_number++;
                }
            } else {
                echo "<tr><td colspan='8'>No users found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>