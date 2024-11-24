<?php
session_start(); // Session indítása
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Repülőjegyek olcsón</title>
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Betöltjük a közös navigációs sávot -->

    <header>
        <h1>Éld át a repülés szabadságát!</h1>
        <img src="../assets/header.jpg" alt="Főoldal képe" style="width: 1200px; display: block; margin: 0 auto;">
        <p>
            Minden repülésünk személyre szabott,
            <br>hogy életed egyik
            legemlékezetesebb élményét nyújtsa.
        </p>
        <h3>Foglalj most, és repülj velünk az égbolt felé!</h3>
    </header>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Repülőjegyek Olcsón. Minden jog fenntartva.</p>
            <ul class="footer-links">
                <li class="link"><a href="contact.php">Kapcsolat</a></li>
                <li class="link"><a href="profile.php">Profil</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
