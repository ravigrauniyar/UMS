CREATE DATABASE IF NOT EXISTS School;

USE School;

-- Designation table
CREATE TABLE IF NOT EXISTS designation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    designation_code VARCHAR(10) NOT NULL,
    designation_name VARCHAR(255) NOT NULL
);

-- Inserting designations
INSERT INTO designation (designation_code, designation_name) VALUES 
('STD', 'Student'),
('FAC', 'Faculty'),
('HOD', 'Head of Department'),
('DIR', 'Director'),
('ADMIN', 'Administrator');

-- Users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    phone VARCHAR(15),
    designation_id INT NOT NULL,
    unitName VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    isActive BOOLEAN NOT NULL DEFAULT true,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (designation_id) REFERENCES designation(id)
);

-- Inserting an initial admin user
INSERT INTO users (username, designation_id, password) VALUES ('admin', 5, 'admin');
