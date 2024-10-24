<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Kapcsolat</title>
</head>
<body>
    <nav>
        <div class="nav_logo">Légvonal</div>
        <ul class="nav_links">
            <li class="link"><a href="index.php">Kezdőoldal</a></li>
            <li class="link"><a href="contact.php">Kapcsolat</a></li>
            <li class="link"><a href="profile.php">Profil</a></li>
        </ul>
        <div class="btns">
            <a href="login.php"><button class="btn">Bejelentkezés</button></a>
            <a href="registration.php"><button class="btn" id="reg">Regisztráció</button></a>
        </div>
    </nav>
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