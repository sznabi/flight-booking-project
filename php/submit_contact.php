<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var(trim($_POST["contact_email"]), FILTER_VALIDATE_EMAIL);
    
    if ($email) {
        echo "<script>alert('Köszönjük a kapcsolatfelvételt! Hamarosan válaszolunk.');</script>";
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Kérlek, adj meg egy érvényes email címet!');</script>";
    }
} else {
    header("Location: contact.php");
    exit();
}
?>
