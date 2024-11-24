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
