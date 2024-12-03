-- Adatbázis létrehozása
CREATE DATABASE IF NOT EXISTS login_register;

-- Az adatbázis használata
USE login_register;

-- Felhasználók tábla létrehozása
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS flights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    origin VARCHAR(255) NOT NULL,
    destination VARCHAR(255) NOT NULL,
    departure DATE NOT NULL,
    return_date DATE NOT NULL,
    available_seats INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    class VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    origin VARCHAR(255),
    destination VARCHAR(255),
    departure DATE,
    `return` DATE,
    class VARCHAR(50),
    price DECIMAL(10, 2),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO flights (origin, destination, departure, return_date, available_seats, price, class)
VALUES
('Róma', 'Berlin', '2024-12-10', '2024-12-15', 20, 15000, 'Turista'),
('Berlin', 'Madrid', '2024-12-12', '2024-12-18', 5, 12000, 'Első'),
('Madrid', 'Barcelona', '2024-12-18', '2024-12-20', 18, 8000, 'Turista'),
('Barcelona', 'Amszterdam', '2024-12-09', '2024-12-14', 10, 14000, 'Turista'),
('Amszterdam', 'Bécs', '2024-12-15', '2024-12-22', 25, 16000, 'Turista'),
('Bécs', 'Zürich', '2024-12-13', '2024-12-20', 8, 20000, 'Első'),
('Zürich', 'Koppenhága', '2024-12-17', '2024-12-21', 12, 18000, 'Turista'),
('Koppenhága', 'Brüsszel', '2024-12-20', '2024-12-25', 15, 15000, 'Turista'),
('Brüsszel', 'Lisszabon', '2024-12-08', '2024-12-15', 30, 11000, 'Turista'),
('Lisszabon', 'Dublin', '2024-12-10', '2024-12-18', 18, 13000, 'Turista'),
('Dublin', 'Prága', '2024-12-16', '2024-12-20', 7, 19000, 'Első'),
('Prága', 'Budapest', '2024-12-12', '2024-12-18', 10, 14000, 'Turista'),
('Budapest', 'Stockholm', '2024-12-14', '2024-12-22', 20, 17000, 'Turista'),
('Stockholm', 'Helsinki', '2024-12-11', '2024-12-16', 25, 10000, 'Turista'),
('Helsinki', 'Oslo', '2024-12-18', '2024-12-23', 14, 15000, 'Turista'),
('Oslo', 'Varsó', '2024-12-20', '2024-12-27', 12, 16000, 'Turista'),
('Varsó', 'Athén', '2024-12-09', '2024-12-15', 20, 17000, 'Első'),
('Athén', 'Róma', '2024-12-10', '2024-12-14', 10, 18000, 'Turista');
