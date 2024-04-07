# User Management System

This is a simple user management system implemented in PHP and MySQL. It provides functionality for user login, user listing, user creation, deletion, and user activation/deactivation.

## Features

- User login: Users can log in using their username and password.
- Dashboard: Upon successful login, users are redirected to the dashboard where they can view a list of users and perform various actions like creating new user.
- User listing: The dashboard displays a list of users with details such as username, phone number, designation, unit name, and status (active/inactive).
- User deletion: Admin users can delete users from the system, removing their records permanently.
- User activation/deactivation: Admin users can activate or deactivate users, controlling their access to the system.

## Technologies Used

- PHP: Used for server-side scripting and backend logic.
- MySQL: Used for database storage and management.
- HTML/CSS: Used for frontend user interface and styling.

## Setup Instructions

1. Clone the repository to your local machine.
2. Install PHP and MySQL on your local machine if not already installed.
3. Create the necessary database tables by importing `script.sql`.
   - Navigate to your PHPMyAdmin dashboard by visiting http://localhost:8080 in your web browser.
   - Log in using your MySQL username and password.
   - Create a new database called "School".
   - Select the newly created database and navigate to the "Import" tab.
   - Choose the script.sql file from your local machine and click "Go" to import the database schema.
4. Navigate to the project directory in your terminal and start the PHP server (`php -S localhost:8000`).
5. Open your web browser and go to `http://localhost:8000` to access the application.

## Usage

1. Log in using username and password. For first login use "admin" and "admin".
2. View the list of users on the dashboard and perform actions such as creation, deletion and activation/deactivation.
3. Log out from the system when done.
