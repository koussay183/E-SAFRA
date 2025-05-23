CREATE DATABASE e_safra;
USE e_safra;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('teacher', 'student'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
