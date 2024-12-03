<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bookingData'])) {
    $data = json_decode($_POST['bookingData'], true);

    if ($data) {
        $_SESSION['lastBooking'] = $data;

        error_log("Foglalási adatok elmentve: " . print_r($data, true));

        header("Location: profile.php");
        exit;
    } else {
        error_log("Hiba: A foglalási adatok nem dekódolhatók.");
        echo "Hiba történt az adatok feldolgozása során.";
    }
} else {
    error_log("Érvénytelen kérés vagy nincs adat.");
    echo "Érvénytelen kérés.";
}
