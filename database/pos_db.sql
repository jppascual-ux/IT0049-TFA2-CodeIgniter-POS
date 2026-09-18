-- IT0049 TFA2 - POS Database Export
-- Database: pos_db
-- Import this file in phpMyAdmin (select/create the database first, then Import).

CREATE DATABASE IF NOT EXISTS `pos_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pos_db`;

-- --------------------------------------------------------
-- Table: customers
-- --------------------------------------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20),
  created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Maria Santos',   'maria.santos@email.com', '09171234567', '2026-09-01 09:15:00'),
('Jose Reyes',     'jose.reyes@email.com',   '09182345678', '2026-09-02 10:30:00'),
('Ana Cruz',       'ana.cruz@email.com',     '09193456789', '2026-09-03 11:45:00'),
('Carlo Dizon',    'carlo.dizon@email.com',  '09204567890', '2026-09-04 13:00:00'),
('Liza Garcia',    'liza.garcia@email.com',  NULL,          '2026-09-05 14:20:00'),
('Ramon Bautista', 'ramon.b@email.com',      '09215678901', '2026-09-06 15:10:00');

-- --------------------------------------------------------
-- Table: users
-- --------------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  full_name VARCHAR(100) NOT NULL,
  created_at DATETIME NOT NULL
);

INSERT INTO users (username, full_name, created_at) VALUES
('admin',     'System Administrator', '2026-09-01 08:00:00'),
('cashier1',  'Bea Lopez',            '2026-09-01 08:05:00'),
('cashier2',  'Mark Villanueva',      '2026-09-01 08:10:00'),
('manager',   'Grace Tan',            '2026-09-01 08:15:00'),
('inventory', 'Paulo Mendoza',        '2026-09-01 08:20:00'),
('support',   'Nina Ramos',           '2026-09-01 08:25:00');
