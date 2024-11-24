<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
    if ($email) {
        echo "Köszönjük a kapcsolatfelvételt! Hamarosan válaszolunk.";
    } else {
        echo "Kérlek, adj meg egy érvényes email címet!";
    }
} else {
    header("Location: contact.php");
    exit();
}
