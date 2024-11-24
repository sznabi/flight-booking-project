<?php
// Betöltjük a navbar.php fájlt, amely a navigációs sávot tartalmazza
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Kapcsolat</title>
</head>
<body>
    <div id="contact">
        <h2>Kapcsolat</h2>
        <form action="submit_contact.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Küldés</button>
        </form>
    </div>

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
