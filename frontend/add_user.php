<head>
    <style>
        .add_user_form {
            display: flex;
            gap: 20px;
            width: 800px;
            flex-wrap: wrap;
            padding: 20px;
        }

        input,
        select {
            height: 20px;
            margin-bottom: 5px;
            /* Adjust input width to fit container */
        }

        label,
        button {
            display: block;
            text-transform: uppercase;
            /* Convert label texts to uppercase */
        }

        .add_user_form button {
            height: 30px;
            background: yellow;
            color: red;
            border: 1px solid black;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form class="add_user_form" action="../backend/add_user.php" method="post">
        <div>
            <input type="text" id="username" name="username" required>
            <label for="username">Username</label>
        </div>

        <div>
            <input type="number" id="phone" name="phone">
            <label for="phone">Phone</label>
        </div>

        <div>
            <select id="designation" name="designation" required>
                <option value="">Select Designation</option>
                <option value="1">Student</option>
                <option value="2">Faculty</option>
                <option value="3">Head of Department</option>
                <option value="4">Director</option>
            </select>
            <label for="designation">Designation</label>
        </div>

        <div>
            <input type="text" id="unitName" name="unitName">
            <label for="unitName">Unit Name</label>
        </div>

        <div>
            <input type="password" id="password" name="password" required>
            <label for="password">Password</label>
        </div>

        <button type="submit">Create User</button>
    </form>
</body>