<?php
session_start();
include 'database.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('A foglaláshoz először regisztráljon vagy jelentkezzen be!'); window.location.href='login.php';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookingData = json_decode($_POST['bookingData'], true);

    $origin = $bookingData['origin'];
    $destination = $bookingData['destination'];
    $departure = $bookingData['departure'];
    $return = $bookingData['returnDate'];
    $class = $bookingData['class'];
    $price = $bookingData['price'];

    $stmt = $conn->prepare("INSERT INTO bookings (user_id, origin, destination, departure, `return`, class, price) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssss", $_SESSION['user_id'], $origin, $destination, $departure, $return, $class, $price);

    if ($stmt->execute()) {
        echo "<script>alert('Foglalás sikeresen mentve!'); window.location.href='profile.php';</script>";
        exit;
    } else {
        echo "Hiba történt a foglalás mentése során.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Érvénytelen kérés.";
}
?>


