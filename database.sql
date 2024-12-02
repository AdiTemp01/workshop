-- Create Database
CREATE DATABASE IF NOT EXISTS workshop-final;

USE workshop-final;

-- Create Table for Registrations
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    usn VARCHAR(10),
    phone VARCHAR(15),
    campus VARCHAR(50),
    branch VARCHAR(50),
    year INT,
    ieee_member ENUM('yes', 'no'),
    ieee_number VARCHAR(15),
    email VARCHAR(100)
);
ALTER TABLE registrations MODIFY COLUMN branch VARCHAR(50);
ALTER TABLE registrations
MODIFY ieee_number BIGINT;


ALTER TABLE registrations
MODIFY branch VARCHAR(50);