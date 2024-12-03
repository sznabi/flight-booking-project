<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <title>Foglalás</title>
</head>
<body>
<?php include 'navbar.php'; ?>

    <div id="booking" class="container">
        <h1 style="margin-bottom: 20px;">Foglalási oldal</h1>
        <div id="flightDetails">
            <!-- Járat adatai ide kerülnek dinamikusan -->
        </div>

        <form id="passengerForm">
            <h1 style="margin-top: 25px; margin-bottom: 10px;">Adja meg az utasok adatait</h1>
            <div id="passengerInputs">
                <!-- Dinamikusan generált utas űrlapok -->
            </div>
            <div id="totalCost">
                <!-- Teljes költség -->
            </div>
            <button type="button" class="btn" id="confirmBooking">Foglalás</button>
        </form>
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
