<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <title>Profil</title>
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Betöltjük a közös navigációs sávot -->

    <header>
        <script>
            if (!<?php echo isset($_SESSION['email']) ? 'false' : 'true'; ?>) {
                alert("Be kell jelentkeznie vagy regisztrálnia kell!");
                window.location.href = 'index.php';
            }
        </script>
    </header>

    <div class="container" id="profile">
        <h2>Profil</h2>
        <div class="section__container">
        <p>Üdvözlünk, <?php echo $_SESSION['fullname']; ?>!</p>
        <!-- Profil információk itt -->
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Légvonal <br>Az oldal egy egyetemi projekt keretében készült.</p>
            <ul class="footer-links">
                <li class="link"><a href="index.php">Kezdőoldal</a></li>
                <li class="link"><a href="contact.php">Kapcsolat</a></li>
                <li class="link"><a href="profile.php">Profil</a></li>
            </ul>
            <p>Kreiniker Ákos, Nagy Szabolcs Benjámin, Tabajdi Bálint</p>
        </div>
    </footer>
</body>
</html>
