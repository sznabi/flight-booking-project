<?php
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
    <div id="contact" class="container">
        <h2>Kapcsolat</h2>
        <form action="submit_contact.php" method="post">
            <p><label>Név:</label> <input name="contact_name" type="text" /></p>
            <p><label>Email:</label> <input name="contact_email" type="email" /></p>
            <p><label>Üzenet:</label> <textarea name="contact_message"></textarea></p>
            <button type="submit" class="btn">Küldés</button>
        </form>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Repülőjegyek Olcsón. Minden jog fenntartva.</p>
            <ul class="footer-links">
                <li class="link"><a href="index.php">Kezdőoldal</a></li>
                <li class="link"><a href="contact.php">Kapcsolat</a></li>
                <li class="link"><a href="profile.php">Profil</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>
