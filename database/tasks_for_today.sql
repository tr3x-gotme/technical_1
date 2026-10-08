CREATE DATABASE IF NOT EXISTS `Technical Summative 1`;
USE `Technical Summative 1`;

DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS users;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review database lesson', 'completed', CURDATE(), NOW()),
('Finish CodeIgniter routes', 'pending', CURDATE(), NOW()),
('Test the task dashboard', 'pending', CURDATE(), NOW()),
('Read chapter three notes', 'pending', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Organize project files', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Prepare laboratory report', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Check GitHub repository', 'pending', DATE_ADD(CURDATE(), INTERVAL 2 DAY), NOW()),
('Review application security', 'pending', DATE_ADD(CURDATE(), INTERVAL 3 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('rexevangelista', 'Rex Evangelista', 'rex.evangelista@example.com', NOW());
