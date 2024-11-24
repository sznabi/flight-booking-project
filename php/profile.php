<?php
session_start(); // Session indítása
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Profil</title>
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Betöltjük a közös navigációs sávot -->

    <header>
        <h1>Profil oldal</h1>
        <p>Üdvözlünk, <?php echo $_SESSION['fullname']; ?>!</p>
        <!-- Profil információk itt -->
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
