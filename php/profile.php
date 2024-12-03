<?php
session_start();
include 'database.php';

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    $sql = "SELECT * FROM bookings WHERE user_id = ? ORDER BY id DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $booking = $result->fetch_assoc();
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
            if (<?php echo isset($_SESSION['fullname']) ? 'false' : 'true'; ?>) {
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
            <?php if ($booking): ?>
                <div>
                    <h3 style="color: #001f3f;">Foglalási adatok:</h3>
                    <p><strong>Innen:</strong> <?php echo htmlspecialchars($booking['origin']); ?></p>
                    <p><strong>Ide:</strong> <?php echo htmlspecialchars($booking['destination']); ?></p>
                    <p><strong>Indulás:</strong> <?php echo htmlspecialchars($booking['departure']); ?></p>
                    <p><strong>Visszaút:</strong> <?php echo htmlspecialchars($booking['return']); ?></p>
                    <p><strong>Osztály:</strong> <?php echo htmlspecialchars($booking['class']); ?></p>
                    <p><strong>Ár:</strong> <?php echo htmlspecialchars($booking['price']); ?> HUF</p>
                </div>
            <?php else: ?>
                <p>Nincs elérhető foglalási információ.</p>
            <?php endif; ?>
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
    <script src="../booking.js"></script>
</body>
</html>
