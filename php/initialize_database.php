<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";

$conn = new mysqli($hostName, $dbUser, $dbPassword);

if ($conn->connect_error) {
    die("Adatbázis kapcsolat sikertelen: " . $conn->connect_error);
}

// Adatbázis létrehozása, ha nem létezik
$sqlCreateDb = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conn->query($sqlCreateDb) === TRUE) {
    echo "Adatbázis ellenőrizve/létrehozva.<br>";
} else {
    die("Hiba az adatbázis létrehozásában: " . $conn->error);
}

// Adatbázis használata
$conn->select_db($dbName);

// Tábla létrehozása, ha nem létezik
$sqlCreateTable = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Tábla ellenőrizve/létrehozva.<br>";
} else {
    die("Hiba a tábla létrehozásában: " . $conn->error);
}

$conn->close();
?>
